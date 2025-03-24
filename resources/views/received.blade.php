@component('mail::message')
# Application Received

Thank you for applying for the Software Developer position at {{ config('app.name') }}.

**Application Details:**  
- Reference: #APP-{{ str_pad($application->id, 6, '0', STR_PAD_LEFT) }}
- Name: {{ $application->first_name }} {{ $application->last_name }}
- Position: Software Developer

We'll review your application and get back to you within 5-7 business days.

@component('mail::button', ['url' => url('/')])
Visit Our Website
@endcomponent

Thanks,<br>
{{ config('app.name') }} Team
@endcomponent