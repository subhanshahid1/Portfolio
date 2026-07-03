New contact form submission from {{ $data['name'] }}

Email: {{ $data['email'] }}
Subject: {{ $data['subject'] ?? 'Portfolio Contact Form' }}

Message:
{{ $data['message'] }}
