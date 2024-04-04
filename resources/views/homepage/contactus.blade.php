@extends('homepage.template');

@section('pageTitle')
Contact Us
@endsection

@section('pageContent')
<h2 class="contact-heading text-center">Contact Us</h2>
<style>
.contact-info {
    color: #0f0909 ; /* Adjust the color to ensure readability on a light background */
    font-size: 18px; /* Adjust the font size as needed */
    line-height: 1.6; /* Adjust the line height for better readability */
}
</style>
<div class="container mt-5" style='color: #fff;'>
    <div class="row">
      <div class="col-lg-12">
        <div class="contact-section text-center">
          <p class="contact-info">For any inquiries or questions regarding our services, please feel free to contact us using the information provided below:</p>
          <p class="contact-info">Email: info@example.com</p>
          <p class="contact-info">Phone: +1 (123) 456-7890</p>
          <p class="contact-info">Address: 123 Street Name, City, Country</p>
          <br><br><br>
        </div>
      </div>
    </div>
  </div>
@endsection