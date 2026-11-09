@extends('layouts.main')
@section('title', 'Pet Care Home')
@section('content')
    <header>
      <div class="container">
        <div class="header__image">
          <img src="Main/tailwag-main/assets/header.png" alt="Header Image" />
        </div>

        <div class="header__content">

          <h1>
            Complete Health Care Solutions for your
            <span id="petfriends">Pets <3</span>
          </h1>
          <p style="color: black">
            PetCare Officail website provides compassionate care and cutting-edge solutions for your furry companions. Schedule an appointment today!
          </p>
          <a href="{{route('care')}}" class="btn">See More</a>
        </div>
      </div>
    </header>

    <section id="services">
      <h2>Our Services</h2>
      <p>
        PetCare offers a range of services to ensure the well-being of your pets. Discover how we can help:
      </p>

      <div class="container">
        <article>
          <i class="bx bx-donate-heart"></i>
          <div>
            <h4>Caring and Qualified Veterinarians</h4>
            <small
              >Our team of compassionate veterinarians is dedicated to providing the highest level of care for your pets.</small
            >
          </div>
        </article>

        <article>
          <i class="bx bx-support"></i>
          <div>
            <h4>Online Support</h4>
            <small
              >Our online support system ensures that you can reach us anytime, anywhere, for pet-related guidance.</small
            >
          </div>
        </article>

        <article>
          <i class="bx bx-calendar-heart"></i>
          <div>
            <h4>Online Booking</h4>
            <small
              >Easily schedule appointments with our convenient online booking system, designed for your convenience.</small
            >
          </div>
        </article>

        <article>
          <i class="bx bx-infinite"></i>
          <div>
            <h4>24/7 Service</h4>
            <small
              >We are available around the clock to address any emergencies or concerns you may have about your pet's health.</small
            >
          </div>
        </article>

        <article>
          <i class="bx bx-first-aid"></i>
          <div>
            <h4>Emergency Veterinary Care</h4>
            <small
              >Our specialists are trained to provide immediate and effective emergency care for your pets whenever needed.</small
            >
          </div>
        </article>

        <article>
          <i class="bx bx-home-heart"></i>
          <div>
            <h4>Pet Boarding and Daycare</h4>
            <small
              >Ensure your pets receive the care they deserve with our comfortable and secure pet boarding and daycare services.</small
            >
          </div>
        </article>
      </div>
    </section>

@endsection
