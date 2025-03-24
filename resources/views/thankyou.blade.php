<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Application</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .thank-you-container {
            max-width: 800px;
            margin: 100px auto;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            background-color: #fff;
            text-align: center;
        }
        .thank-you-icon {
            font-size: 5rem;
            color: #28a745;
            margin-bottom: 20px;
        }
        .btn-back {
            margin-top: 30px;
            padding: 10px 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="thank-you-container">
            <div class="thank-you-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1>Thank You!</h1>
            <p class="lead">Your application has been successfully submitted.</p>
            <p>We've received your application for the Software Developer position. Our team will review your information and contact you if your qualifications match our requirements.</p>
            
            <div class="whats-next mt-5">
                <h3>What's Next?</h3>
                <ul class="list-unstyled text-start mx-auto" style="max-width: 500px;">
                    <li class="mb-2"><i class="fas fa-check me-2 text-success"></i> You'll receive a confirmation email shortly</li>
                    <li class="mb-2"><i class="fas fa-check me-2 text-success"></i> Our team will review your application</li>
                    <li class="mb-2"><i class="fas fa-check me-2 text-success"></i> We'll contact you within 5-7 business days</li>
                </ul>
            </div>
            
            <a href="{{ url('/') }}" class="btn btn-primary btn-back">
                <i class="fas fa-home me-2"></i>Back to Home
            </a>
            
            <div class="mt-5 text-muted small">
                <p>Application Reference: #{{ session('application_ref') ?? 'N/A' }}</p>
                <p>If you have any questions, please contact <a href="mailto:careers@yourcompany.com">careers@retinasoft.com</a></p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>