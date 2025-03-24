<?php
namespace App\Http\Controllers;

use App\Mail\ApplicationReceived;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ApplicationController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        try {
            // Validate the request
            $validated = $request->validate([
                'firstName'         => 'required|string|max:255',
                'lastName'          => 'required|string|max:255',
                'email'             => 'required|email|unique:applications,email',
                'phone'             => 'required|string|max:20',
                'address'           => 'nullable|string',
                'referrerId'        => 'nullable|string|max:50',
                'yearsExperience'   => 'required|string|in:0-1,1-3,3-5,5+',
                'currentRole'       => 'nullable|string|max:255',
                'skills'            => 'required|string',
                'experienceDetails' => 'required|string',
                'github'            => 'nullable|string|max:255',
                'linkedin'          => 'nullable|string|max:255',
                'portfolio'         => 'nullable|url|max:255',
                'availability'      => 'required|string|in:morning,afternoon,evening,flexible',
                'resume'            => 'required|file|mimes:pdf|max:5120', // 5MB
            ], [
                'resume.mimes'    => 'The resume must be a PDF file.',
                'resume.max'      => 'The resume may not be greater than 5MB.',
                'email.unique'    => 'This email has already been used for an application.',
                'availability.in' => 'Please select a valid availability option.',
            ]);

            // Handle file upload with additional validation
            if ($request->hasFile('resume')) {
                $file = $request->file('resume');
                // Additional file validation
                if (! $file->isValid()) {
                    throw new \Exception('The resume file is not valid.');
                }
                $path                     = $file->store('resumes', 'public');
                $validated['resume_path'] = $path;
            }

            // Map form fields to database columns
            $applicationData = [
                'first_name'         => $validated['firstName'],
                'last_name'          => $validated['lastName'],
                'email'              => $validated['email'],
                'phone'              => $validated['phone'],
                'address'            => $validated['address'] ?? null,
                'referrer_id'        => $validated['referrerId'] ?? null,
                'years_experience'   => $validated['yearsExperience'],
                'current_role'       => $validated['currentRole'] ?? null,
                'skills'             => $validated['skills'],
                'experience_details' => $validated['experienceDetails'],
                'github'             => $validated['github'] ?? null,
                'linkedin'           => $validated['linkedin'] ?? null,
                'portfolio'          => $validated['portfolio'] ?? null,
                'availability'       => $validated['availability'],
                'resume_path'        => $validated['resume_path'],
            ];

            // Create application
            $application = Application::create($applicationData);

            // Set session data
            session([
                'application_submitted' => true,
                'application_ref'       => 'APP-' . str_pad($application->id, 6, '0', STR_PAD_LEFT),
            ]);

            // Optionally send notification email
            $this->sendApplicationNotification($application);

            return response()->json([
                'success'      => true,
                'message'      => 'Application submitted successfully',
                'data'         => $application,
                'redirect_url' => route('application.thankyou'), // Optional redirect
            ], 201);

        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors'  => $e->errors(),
            ], 422);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Application submission failed: ' . $e->getMessage(),
            ], 500);
        }
    }

    // Optional notification method
    protected function sendApplicationNotification(Application $application) {
        // Implement your notification logic here
        Mail::to($application->email)
            ->send(new ApplicationReceived($application));
    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application) {
        //
    }
}
