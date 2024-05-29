@extends('Client.Layouts.index')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- CSRF token -->

    <main>

        {{-- quizz --}}
        <section class="blog-area pt-100 pb-100 grey-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="tpsection mb-35">
                            <h4 class="tpsection__sub-title">~ Read Our Blog ~</h4>
                            <h4 class="tpsection__title">Our Latest Post</h4>
                            <p>The liber tempor cum soluta nobis eleifend option congue doming quod mazim.</p>
                        </div>
                    </div>
                </div>

                @if (count($players) > 0)
                    <div class="container">
                        <div class="swiper-container category-active">
                            <div class="swiper-wrapper">
                                @foreach ($players as $player)
                                    <div class="swiper-slide">
                                        <div class="category__item mb-30">
                                            <div class="category__thumb fix mb-15">
                                                <!-- Assuming $player->Image is the field for player image -->
                                                <a href="#"><img src="{{ $player->Image }}"
                                                        alt="{{ $player->name }}"></a>
                                            </div>
                                            <div class="category__content">
                                                <!-- Assuming $player->name is the field for player's name -->
                                                <h5 class="category__title"><a href="#"
                                                        data-jouer-id="{{ $player->id }}">{{ $player->name }}</a></h5>
                                                <!-- You can display other player information here -->
                                                <span class="category__count">
                                                    <!-- Display player category or any other relevant info -->
                                                    <p>Points Gained: {{ $player->points_gained }}</p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @else
                    <div class="text-center">
                        <p>No games found.</p>
                    </div>
                @endif
            </div>
        </section>

    </main>
    <!-- Modal -->
    <div class="modal fade" id="jeuxModal" tabindex="-1" role="dialog" aria-labelledby="jeuxModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="jeuxModalLabel">Game Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="gameDetails" style="text-align: center">
                        <!-- Game details will be loaded here via AJAX -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.category__title a').click(function(e) {
                e.preventDefault();
                var jouerId = $(this).data('jouer-id');
                var csrfToken = $(
                        'meta[name="csrf-token"]')
                    .attr(
                        'content');
                $.ajax({
                    type: 'POST',
                    url: '/check-response',
                    data: {
                        jouerId: jouerId
                    },
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(response) {
                        if (response.error) {
                            // Show toastr message indicating the user has already played the quiz
                            toastr.error(response.error, 'Error', {
                                timeOut: 5000
                            });
                        } else {
                            // Proceed to display the quiz modal
                            $.ajax({
                                type: 'GET',
                                url: '/jouer/' + jouerId,
                                success: function(response) {
                                    var gameDetails = '<h5>' + response.name +
                                        '</h5>';
                                    gameDetails += '<form id="quizForm">';
                                    gameDetails +=
                                        '<input type="hidden" name="jouerId" value="' +
                                        jouerId +
                                        '">';
                                    gameDetails +=
                                        '<p><input type="radio" name="response" value="' +
                                        response.Reponse1 +
                                        '">' +
                                        response.Reponse1 + '</p>';
                                    gameDetails +=
                                        '<p><input type="radio" name="response"  value="' +
                                        response.Reponse2 +
                                        '">' +
                                        response.Reponse2 + '</p>';
                                    gameDetails +=
                                        '<p><input type="radio" name="response"  value="' +
                                        response.Reponse3 +
                                        '">' +
                                        response.Reponse3 + '</p>';
                                    gameDetails +=
                                        '<button type="button" class="form-control" id="verifyBtn">Verify</button>';
                                    gameDetails += '</form>';
                                    $('#gameDetails').html(gameDetails);
                                    $('#jeuxModal').modal('show');

                                    // Add event listener for the verification button
                                    $('#verifyBtn').click(function() {
                                        // Check if a response is selected
                                        if (!$(
                                                'input[name="response"]:checked'
                                            )
                                            .val()) {
                                            toastr.error(
                                                'Please select a response.',
                                                'Error', {
                                                    timeOut: 5000
                                                });
                                            return; // Exit function if no response is selected
                                        }

                                        // Serialize the form data
                                        var formData = $('#quizForm')
                                            .serialize();
                                        console.log(formData)
                                        // Perform verification logic here
                                        // For example, you can use another AJAX request to send the form data to the server for verification
                                        var csrfToken = $(
                                                'meta[name="csrf-token"]')
                                            .attr(
                                                'content');

                                        $.ajax({
                                            type: 'POST',
                                            url: '/verify-response',
                                            data: formData, // Send the serialized form data
                                            headers: {
                                                'X-CSRF-TOKEN': csrfToken
                                            },
                                            success: function(
                                                response) {
                                                // Handle the success response from the server
                                                console.log(
                                                    response
                                                )
                                                toastr.success(
                                                    response
                                                    .message,
                                                    'Success', {
                                                        timeOut: 5000
                                                    });
                                                    $('#jeuxModal').modal('hide');

                                            },
                                            error: function(error) {
                                                if (error
                                                    .status ===
                                                    422) {
                                                    var errors =
                                                        error
                                                        .responseJSON
                                                        .errors;
                                                    // Loop through the validation errors and display them
                                                    for (var key in
                                                            errors) {
                                                        if (errors
                                                            .hasOwnProperty(
                                                                key
                                                            )
                                                        ) {
                                                            toastr
                                                                .error(
                                                                    errors[
                                                                        key
                                                                    ]
                                                                    [
                                                                        0
                                                                    ],
                                                                    'Error', {
                                                                        timeOut: 5000
                                                                    }
                                                                );
                                                        }
                                                    }
                                                } else {
                                                    toastr
                                                        .error(
                                                            'An error occurred while processing your request.',
                                                            'Error', {
                                                                timeOut: 5000
                                                            });
                                                }
                                            }
                                        });
                                    });

                                },
                                error: function(error) {
                                    console.log(error);
                                }
                            });
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });




            });
        });
    </script>


@endsection
