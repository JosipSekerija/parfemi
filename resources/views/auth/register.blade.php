<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script
      src="https://kit.fontawesome.com/9bf143935f.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Poppins&display=swap"
      rel="stylesheet"
    />

    <title>Registration</title>
  </head>
  <body>
    <div class="body-wrapper">
      <div class="container-fluid mt-5 pt-5">
        <div class="row">
          <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card shadow forma-kartica">
              <div class="card-body">
                <svg
                  class="mb-3"
                  xmlns="http://www.w3.org/2000/svg"
                  width="40px"
                  height="40px"
                  fill="currentColor"
                  class="bi bi-person-fill-check"
                  viewBox="0 0 16 16"
                  style="color: #ffb577; margin: auto"
                >
                  <path
                    d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                  />
                  <path
                    d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"
                  />
                </svg>
                <form method="POST" action="{{ route('register') }}">
                  @csrf
                  <input
                    type="text"
                    class="form-control my-3 py-2"
                    placeholder="Ime"
                    name="name"
                    :value="old('name')"
                    required
                    autofocus
                    autocomplete="name"
                  />
                  <input
                    type="email"
                    class="form-control my-3 py-2"
                    placeholder="Email"
                    name="email"
                    :value="old('email')"
                    required
                  />
                  <input
                    type="password"
                    class="form-control my-3 py-2"
                    placeholder="Šifra"
                    name="password"
                    required
                    autocomplete="new-password"
                  />
                  <input
                    type="password"
                    class="form-control my-3 py-2"
                    placeholder="Potvrdi šifru"
                    name="password_confirmation"
                    required
                    autocomplete="new-password"
                  />
                  <input
                    type="number"
                    class="form-control my-3 py-2"
                    placeholder="Mobitel"
                    name="phone"
                    :value="old('phone')"
                    required
                  />
                  <input
                    type="text"
                    class="form-control my-3 py-2"
                    placeholder="Adresa"
                    name="address"
                    :value="old('address')"
                    required
                  />
                  @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div class="mt-4">
                      <div class="flex items-center">
                        <input
                          type="checkbox"
                          class="form-checkbox"
                          name="terms"
                          id="terms"
                        />
                        <div class="ml-2">
                          {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                          ]) !!}
                        </div>
                      </div>
                    </div>
                  @endif
                  <div class="text-center mt-3">
                    <button type="submit" class="btn dugme">Registriraj se</button>
                    <a href="{{ route('login') }}" class="nav-link mt-2 forma-link">Već imate račun?</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
