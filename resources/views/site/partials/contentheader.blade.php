<!-- Content Header (Page header) -->
@if (session()->has('success_message'))
    <div class="alert alert-success">
        {{ session()->get('success_message') }}
    </div>
@endif

@if (session()->has('error_message'))
    <div class="alert alert-danger">
        {{ session()->get('error_message') }}
    </div>
@endif

<section class="content-header">
    <h3>
        E-commerce DAbM - Marinha do Brasil
    </h3>
</section>

