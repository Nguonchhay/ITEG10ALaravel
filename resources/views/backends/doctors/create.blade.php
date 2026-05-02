@extends('layouts.frontend')

@section('content')

    <!-- Page Title -->
    <div class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1 class="heading-title">New Doctor</h1>
              
              <a class="btn btn-primary" href="{{ route('pages.doctors') }}">Back to List</a>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Doctors</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Doctors Section -->
    <section id="doctors" class="doctors section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <form action="{{ route('backends.doctors.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="fullname" name="fullname">
          </div>
          <div class="mb-3">
            <label for="specialist" class="form-label">Specialist</label>
            <input type="text" class="form-control" id="specialist" name="specialist">
          </div>
          <div class="mb-3">
            <label for="info" class="form-label">Info</label>
            <input type="text" class="form-control" id="info" name="info">
          </div>
          <div class="mb-3">
            <label for="experience_year" class="form-label">Experience Years</label>
            <input type="text" class="form-control" id="experience_year" name="experience_year">
          </div>
          <div class="mb-3">
            <label for="socials" class="form-label">Social Media Links</label>
            <input type="text" class="form-control" id="socials" name="socials">
          </div>
          <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="text" class="form-control" id="avatar" name="avatar" placeholder="Avatar URL">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>

    </section><!-- /Doctors Section -->

@endsection
