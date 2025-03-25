<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Developer Interview Registration</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- SweetAlert CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <style>
        .form-container {
            max-width: 800px;
            margin: 30px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .form-header {
            text-align: center;
            margin-bottom: 30px;
            color: #2c3e50;
        }
        .form-header h2 {
            font-weight: 600;
        }
        .required-field::after {
            content: "*";
            color: red;
            margin-left: 4px;
        }
        .btn-submit {
            background-color: #3498db;
            border: none;
            padding: 10px 25px;
            font-weight: 500;
        }
        .btn-submit:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="form-container">
            <div class="form-header">
                <h2><i class="fas fa-laptop-code me-2"></i>Software Developer Interview Registration</h2>
                <p class="text-muted">Please fill out the form below to register for the interview process</p>
            </div>
            
            <form id="applicationForm" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Refer Information Section -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2"><i class="fas fa-user me-2"></i>Refer Information</h5>
                    
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="referrerId" class="form-label required-field">Referrer Code</label>
                            <input type="text" name="referrerId" class="form-control" id="referrerId" required>
                        </div>
                    </div>
                </div>

                <!-- Personal Information Section -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2"><i class="fas fa-user me-2"></i>Personal Information</h5>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="form-label required-field">First Name</label>
                            <input type="text" name="firstName" class="form-control" id="firstName" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName" class="form-label required-field">Last Name</label>
                            <input type="text" name="lastName" class="form-control" id="lastName" required>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label required-field">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone" class="form-label required-field">Phone Number</label>
                            <input type="tel" name="phone" class="form-control" id="phone" required>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <textarea class="form-control" name="address" id="address" rows="2"></textarea>
                    </div>
                </div>
                
                <!-- Experience Section -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2"><i class="fas fa-briefcase me-2"></i>Professional Experience</h5>
                    
                    <div class="mb-3">
                        <label for="yearsExperience" class="form-label required-field">Years of Experience</label>
                        <select class="form-select" name="yearsExperience" id="yearsExperience" required>
                            <option value="" selected disabled>Select years</option>
                            <option value="0-1">0-1 years</option>
                            <option value="1-3">1-3 years</option>
                            <option value="3-5">3-5 years</option>
                            <option value="5+">5+ years</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="currentRole" class="form-label">Current/Most Recent Role</label>
                        <input type="text" name="currentRole" class="form-control" id="currentRole">
                    </div>
                    
                    <div class="mb-3">
                        <label for="skills" class="form-label required-field">Technical Skills</label>
                        <textarea class="form-control" name="skills" id="skills" rows="3" required placeholder="List your programming languages, frameworks, tools, etc."></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="experienceDetails" class="form-label required-field">Experience Details</label>
                        <textarea class="form-control" name="experienceDetails" id="experienceDetails" rows="4" required placeholder="Describe your professional experience, projects you've worked on, and your responsibilities"></textarea>
                    </div>
                </div>
                
                <!-- Additional Information -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2"><i class="fas fa-info-circle me-2"></i>Additional Information</h5>
                    
                    <div class="mb-3">
                        <label for="github" class="form-label">GitHub Profile</label>
                        <div class="input-group">
                            <span class="input-group-text">https://github.com/</span>
                            <input type="text" name="github" class="form-control" id="github">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="linkedin" class="form-label">LinkedIn Profile</label>
                        <div class="input-group">
                            <span class="input-group-text">https://linkedin.com/in/</span>
                            <input type="text" name="linkedin" class="form-control" id="linkedin">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="portfolio" class="form-label">Portfolio Website</label>
                        <input type="url" name="portfolio" class="form-control" id="portfolio" placeholder="https://">
                    </div>
                    
                    <div class="mb-3">
                        <label for="availability" class="form-label required-field">Available for Interview</label>
                        <select class="form-select" name="availability" id="availability" required>
                            <option value="" selected disabled>Select availability</option>
                            <option value="morning">Morning (9AM-12PM)</option>
                            <option value="afternoon">Afternoon (1PM-5PM)</option>
                            <option value="evening">Evening (6PM-9PM)</option>
                            <option value="flexible">Flexible</option>
                        </select>
                    </div>
                </div>
                
                <!-- Resume Upload -->
                <div class="mb-4">
                    <h5 class="mb-3 border-bottom pb-2"><i class="fas fa-file-upload me-2"></i>Resume Upload</h5>
                    
                    <div class="mb-3">
                        <label for="resume" class="form-label required-field">Upload Resume (PDF only, max 5MB)</label>
                        <input class="form-control" name="resume" type="file" id="resume" accept=".pdf" required>
                    </div>
                </div>
                
                <!-- Terms and Submit -->
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="terms" required>
                    <label class="form-check-label" for="terms">
                        I agree to the <a href="#">terms and conditions</a> and confirm that the information provided is accurate.
                    </label>
                </div>
                
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-submit">
                        <i class="fas fa-paper-plane me-2"></i>Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            // Form submission handler
            $('#applicationForm').on('submit', function(e) {
                e.preventDefault();
                
                // Validate form
                if (!this.checkValidity()) {
                    $(this).addClass('was-validated');
                    return;
                }

                let formData = new FormData(this);
                formData.append('_token', '{{ csrf_token() }}');                

                // Show loading state with SweetAlert
                Swal.fire({
                    title: 'Processing your application',
                    html: 'Please wait while we submit your information',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });

                $.ajax({
                    url: '{{ route("application.store") }}',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: 'Your application has been submitted successfully',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed && response.redirect_url) {
                                $('#applicationForm')[0].reset();
                                $('#applicationForm').removeClass('was-validated');
                                window.location.href = response.redirect_url;
                            }
                        });
                    },
                    error: function(xhr) {
                        let errorTitle = 'Submission Error';
                        let errorText = 'An error occurred while submitting your application';
                        
                        // Handle validation errors
                        if (xhr.status === 422) {
                            errorTitle = 'Validation Error';
                            const errors = xhr.responseJSON.errors;
                            errorText = '';
                            
                            // Build error message from validation errors
                            for (const field in errors) {
                                errorText += `${errors[field].join('<br>')}<br>`;
                            }
                        } 
                        // Handle other types of errors
                        else if (xhr.responseJSON && xhr.responseJSON.message) {
                            errorText = xhr.responseJSON.message;
                        }

                        Swal.fire({
                            icon: 'error',
                            title: errorTitle,
                            html: errorText,
                            confirmButtonText: 'OK'
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>