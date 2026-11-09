@extends('layouts.main')
@section('home', '')
@section('about', 'color: lime; font-weight: 900;')
@section('title', 'About Us')
@section('content')

<section class="about__hero">
    <div class="container">
        <div class="about__hero-content">
            <div class="about__hero-text">
                <span class="section__subtitle">
                    <i class="fas fa-paw"></i>
                    About PetCare
                </span>

                <h1>
                    Caring for Pets,
                    <span>Building Happier Lives</span>
                </h1>

                <p>
                    PetCare is a pet care platform created to make
                    pet care easier, more convenient and accessible for
                    every pet owner.
                </p>

                <a href="{{ route('care') }}" class="btn">
                    Explore Care Tips
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="about__hero-image">
                <img
                    src="{{ asset('Main/tailwag-main/assets/petowner2.jpeg') }}"
                    alt="Happy pet" height="400px">
            </div>
        </div>
    </div>
</section>

<section class="about__intro">
    <div class="container">
        <div class="about__intro-grid">

            <div class="about__intro-image">
                <img
                    src="{{ asset('Main/tailwag-main/assets/petowner7.jpg') }}"
                    alt="Pet care">

                <div class="about__experience">
                    <i class="fas fa-heart"></i>
                    <div>
                        <strong>Pet First</strong>
                        <small>Always</small>
                    </div>
                </div>
            </div>

            <div class="about__intro-content">

                <span class="section__subtitle">
                    <i class="fas fa-paw"></i>
                    Who We Are
                </span>

                <h2>
                    Everything Your Pet Needs,
                    <span>In One Place</span>
                </h2>

                <p>
                    At TailWag Hub, we believe that pets are more than
                    animals — they are part of the family. Our platform
                    is designed to help pet owners find useful information
                    and make better decisions about their pets' everyday care.
                </p>

                <p>
                    From health and nutrition to safety and general
                    well-being, we provide simple and helpful resources
                    that make responsible pet ownership easier.
                </p>

                <div class="about__checks">

                    <div>
                        <i class="fas fa-check-circle"></i>
                        <span>Reliable Pet Care Information</span>
                    </div>

                    <div>
                        <i class="fas fa-check-circle"></i>
                        <span>Easy and User-Friendly Platform</span>
                    </div>

                    <div>
                        <i class="fas fa-check-circle"></i>
                        <span>Pet-Focused Services</span>
                    </div>

                    <div>
                        <i class="fas fa-check-circle"></i>
                        <span>Designed for Every Pet Owner</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about__mission">
    <div class="container">
        <div class="section__head">
            <span class="section__subtitle">
                <i class="fas fa-heart"></i>
                Our Mission
            </span>

            <h2>
                Making Pet Care
                <span>Simple & Accessible</span>
            </h2>

            <p>
                Our mission is to help pet owners provide better care
                by giving them convenient access to useful pet-care
                information and services.
            </p>
        </div>

        <div class="mission__cards">

            <article class="mission__card">
                <div class="mission__icon">
                    <i class="fas fa-heart"></i>
                </div>

                <h3>Compassionate Care</h3>

                <p>
                    We believe every pet deserves kindness, attention
                    and the best possible care.
                </p>
            </article>

            <article class="mission__card">
                <div class="mission__icon">
                    <i class="fas fa-shield-dog"></i>
                </div>

                <h3>Pet Safety</h3>

                <p>
                    We encourage responsible pet ownership and help
                    owners understand important safety practices.
                </p>
            </article>


            <article class="mission__card">
                <div class="mission__icon">
                    <i class="fas fa-stethoscope"></i>
                </div>

                <h3>Better Health</h3>

                <p>
                    We promote healthy habits and provide helpful
                    information for maintaining your pet's well-being.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="about__services">
    <div class="container">
        <div class="section__head">
            <span class="section__subtitle">
                <i class="fas fa-paw"></i>
                What We Offer
            </span>

            <h2>
                Complete Care for
                <span>Your Furry Friends</span>
            </h2>
        </div>


        <div class="offer__grid">
            <article class="offer__card">
                <i class="fas fa-user-doctor"></i>
                <h3>Veterinary Care</h3>
                <p>
                    Helping pet owners find appropriate veterinary
                    care for their beloved companions.
                </p>
            </article>

            <article class="offer__card">
                <i class="fas fa-notes-medical"></i>
                <h3>Health Information</h3>
                <p>
                    Useful information to help owners understand
                    their pets' health and daily needs.
                </p>
            </article>


            <article class="offer__card">
                <i class="fas fa-calendar-check"></i>
                <h3>Easy Appointments</h3>
                <p>
                    A convenient way for pet owners to manage
                    veterinary appointments.
                </p>
            </article>


            <article class="offer__card">
                <i class="fas fa-bowl-food"></i>
                <h3>Nutrition</h3>
                <p>
                    Helpful guidance about balanced nutrition,
                    fresh water and healthy feeding habits.
                </p>
            </article>


            <article class="offer__card">
                <i class="fas fa-lightbulb"></i>
                <h3>Care Tips</h3>
                <p>
                    Simple tips that help owners provide better
                    everyday care for their pets.
                </p>
            </article>


            <article class="offer__card">
                <i class="fas fa-house"></i>
                <h3>Everyday Care</h3>
                <p>
                    Practical information for creating a safe,
                    comfortable and happy environment for pets.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="about__why">
    <div class="container">
        <div class="about__why-content">
            <div>
                <span class="section__subtitle">
                    <i class="fas fa-star"></i>
                    Why Choose PetCare ?
                </span>

                <h2>
                    Because Your Pet
                    <span>Deserves the Best</span>
                </h2>

                <p>
                    Taking care of a pet comes with responsibility.
                    TailWag Hub is designed to make that responsibility
                    easier by bringing useful pet-care resources
                    together in one place.
                </p>
            </div>


            <div class="why__list">
                <div class="why__item">
                    <div class="why__icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <div>
                        <h4>Easy to Use</h4>
                        <p>
                            Simple navigation and a user-friendly design.
                        </p>
                    </div>
                </div>


                <div class="why__item">
                    <div class="why__icon">
                        <i class="fas fa-paw"></i>
                    </div>
                    <div>
                        <h4>Pet Focused</h4>
                        <p>
                            Everything is designed with pets and owners
                            in mind.
                        </p>
                    </div>
                </div>


                <div class="why__item">
                    <div class="why__icon">
                        <i class="fas fa-heart"></i>
                    </div>

                    <div>
                        <h4>Made with Care</h4>
                        <p>
                            Our goal is to promote happier and healthier pets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about__cta">
    <div class="container">
        <div class="about__cta-content">
            <div>
                <span class="section__subtitle">
                    <i class="fas fa-paw"></i>
                    Love Your Pet
                </span>

                <h2>
                    Your Pet Deserves
                    <span>The Best Care</span>
                </h2>

                <p>
                    Explore our pet care resources and discover simple
                    ways to keep your furry friend healthy and happy.
                </p>
            </div>

            <a href="{{ route('care') }}" class="btn">
                View Care Tips
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection