@extends('layouts.main')
@section('home', '')
@section('care', 'color: lime; font-weight: 900;')
@section('title', 'Pet Care Tips')
@section('content')

<style>
    image{
        object-fit: cover !important;
    }
</style>

<section class="care-hero">
    <div class="container">
        <div class="row care-hero-row">
            <div class="col-lg-6 care-hero-text">

                <h1>
                    Care Tips for Your
                    <span>Best Friend</span>
                </h1>

                <p>
                    Give your furry friends the love, care and attention
                    they deserve. Explore our simple pet care tips to help
                    your pets stay healthy, happy and active.
                </p>

                <a href="#care-tips" class="btn">
                    Explore Care Tips
                </a>

            </div>

            <div class="col-lg-6 care-hero-image">

                <img
                    src="https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=900&q=80"
                    alt="Happy dog">
            </div>
        </div>
    </div>
</section>

<section class="care-intro">
    <div class="container">
        <div class="care-intro-row">
            <div class="care-intro-image">

                <img src="https://images.unsplash.com/photo-1596854407944-bf87f6fdd49e?auto=format&fit=crop&w=1200&q=80" alt="Pets together">
                
            </div>

            <div class="care-intro-content">
                <h2>
                    Because Every Pet Deserves the Best Care
                </h2>

                <p>
                    Taking care of a pet is more than providing food and
                    shelter. Your pet needs proper nutrition, exercise,
                    grooming, regular veterinary care and plenty of love.
                </p>

                <p>
                    These simple care tips can help you understand your
                    pet's everyday needs and create a healthier and happier
                    life for your furry companion.
                </p>

                <a href="#fag" class="btn-primary">
                    Read FAQs
                </a>

            </div>

        </div>

    </div>

</section>

<section class="care-cards-section" id="care-tips">
    <div class="container">
        <div class="care-heading">
            <h2>
                Essential Pet Care Tips
            </h2>
            <p>
                A few simple habits can make a big difference in your
                pet's health and happiness.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="care-card">
                    <div class="care-icon">
                        <i class="fas fa-bone"></i>
                    </div>
                    <h4>Healthy Nutrition</h4>
                    <p>
                        Provide your pet with balanced food, fresh water
                        and meals suitable for their age, size and needs.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="care-card">
                    <div class="care-icon">
                        <i class="fas fa-cut"></i>
                    </div>
                    <h4>Regular Grooming</h4>
                    <p>
                        Regular brushing, bathing and nail care help keep
                        your pet clean, comfortable and healthy.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="care-card">
                    <div class="care-icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <h4>Daily Exercise</h4>
                    <p>
                        Give your pet enough physical activity to maintain
                        a healthy weight and strong muscles.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="care-card">

                    <div class="care-icon">
                        <i class="fas fa-stethoscope"></i>
                    </div>

                    <h4>Veterinary Care</h4>

                    <p>
                        Regular veterinary checkups help detect potential
                        health problems early.
                    </p>

                </div>

            </div>

            <div class="col-lg-4 col-md-6">
                <div class="care-card">
                    <div class="care-icon">
                        <i class="fas fa-tooth"></i>
                    </div>

                    <h4>Dental Health</h4>

                    <p>
                        Good dental care helps prevent bad breath, plaque
                        and other oral health problems.
                    </p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="care-card">
                    <div class="care-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4>Love & Attention</h4>
                    <p>
                        Spend time playing, training and bonding with your
                        pet to support their emotional well-being.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="care-guide">
    <div class="container">
        <div class="care-heading">
            <h2>
                Simple Ways to Care for Your Pet
            </h2>

            <p>
                Follow these everyday practices to keep your pet healthy,
                comfortable and happy.
            </p>
        </div>

        <div class="row align-items-center guide-row">

            <div class="col-lg-6">
                <div class="guide-content">
                    <h3>1. Give Them Proper Nutrition</h3>
                    <p>
                        A healthy diet is one of the most important parts
                        of pet care. Choose food that is appropriate for
                        your pet's age, size and lifestyle.
                    </p>

                    <ul class="guide-list">

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Provide fresh drinking water.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Follow suitable feeding portions.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Avoid giving harmful human foods.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-center guide-row">

            <div class="col-lg-6 order-lg-1">
                <div class="guide-content">
                    <h3>2. Keep Your Pet Clean</h3>
                    <p>
                        Grooming isn't only about making your pet look
                        good. It can also help you notice skin problems,
                        parasites or unusual changes early.
                    </p>

                    <ul class="guide-list">

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Brush your pet regularly.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Keep nails at a healthy length.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Bathe when necessary.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row align-items-center guide-row">

            <div class="col-lg-6">
                <div class="guide-content">
                    <h3>3. Keep Them Active</h3>
                    <p>
                        Exercise helps pets maintain a healthy weight and
                        gives them an opportunity to stay mentally
                        stimulated.
                    </p>

                    <ul class="guide-list">

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Take dogs for regular walks.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Play interactive games.
                        </li>

                        <li>
                            <i class="fas fa-check-circle"></i>
                            Give pets age-appropriate activities.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq-section" id="faq">
    <div class="container">
        <div class="care-heading">
            <h2>
                Frequently Asked Questions
            </h2>
            <p>
                Here are some common questions pet owners ask about
                everyday pet care.
            </p>
        </div>

        <div class="faq-container">
            <div class="faq-item">
                <button class="faq-question">

                   <p> How often should I take my pet to the veterinarian?</p>

                    <i class="fas fa-chevron-down"></i>
                </button>

                <div class="faq-answer">

                   <p> Regular veterinary checkups are important for
                    maintaining your pet's health. The exact frequency
                    depends on your pet's age, health and individual
                    needs. Your veterinarian can recommend an appropriate
                    schedule.</p>

                </div>

            </div>

            <div class="faq-item">
                <button class="faq-question">
                    <p>How often should I groom my pet?</p>
                    <i class="fas fa-chevron-down"></i>
                </button>

                <div class="faq-answer">

                    <p>Grooming frequency depends on your pet's breed,
                    coat type and lifestyle. Regular brushing is useful
                    for many pets, while bathing and nail trimming should
                    be done as needed.</p>

                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">

                    <p>What food should I give my pet?</p>
                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>Choose a balanced pet food that is appropriate for
                    your pet's species, age, size and lifestyle. Fresh
                    drinking water should also always be available.</p>

                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">

                    <p>How much exercise does my pet need?</p>
                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                    <p>Exercise needs vary depending on species, age, breed
                    and health. Dogs generally benefit from regular walks
                    and play, while cats can benefit from interactive
                    toys and indoor activities.</p>

                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">

                    <p>How can I keep my pet's teeth healthy?</p>
                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">

                   <p> Regular dental care can help maintain your pet's oral
                    health. Ask your veterinarian about suitable
                    toothbrushes, dental products and professional dental
                    cleanings.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">

                    <p>What should I do if my pet suddenly seems sick?</p>
                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">
                    <p>If your pet shows unusual symptoms, sudden behavior
                    changes or signs of illness, contact a veterinarian
                    for professional advice. For serious or emergency
                    symptoms, seek veterinary care immediately.</p>
                </div>
            </div>

            <div class="faq-item">
                <button class="faq-question">

                    <p>How can I keep my pet happy?</p>
                    <i class="fas fa-chevron-down"></i>

                </button>

                <div class="faq-answer">
                    <p>Spend quality time with your pet, provide appropriate
                    exercise and mental stimulation, maintain a healthy
                    routine and give them plenty of attention and affection.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="care-cta">
    <div class="container">
        <div class="cta-box">

            <h2>
                Your Pet Deserves the Best Care
            </h2>

            <p>
                Have a question about your pet's health or need
                professional veterinary care? Our team is here to help.
            </p>

            <a href="{{ route('appoint') }}" class="cta-btn">
                Book an Appointment
            </a>

        </div>
    </div>
</section>

<script>

    document.querySelectorAll('.faq-question').forEach(function(button) {

        button.addEventListener('click', function() {

            const item = this.parentElement;

            document.querySelectorAll('.faq-item').forEach(function(otherItem) {

                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }

            });

            item.classList.toggle('active');

        });

    });

</script>

@endsection