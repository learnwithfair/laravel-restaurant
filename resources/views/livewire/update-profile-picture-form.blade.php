<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Update Profile Picture') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Ensure your account is using a long, Profile picture to contain identity.') }}
    </x-slot>

    <x-slot name="form">


        <div class="col-span-8 sm:col-span-6" align="middle">

            @php
                $Photo = Auth::user()->image;
            @endphp

            @php
                $profilePhoto = Auth::user()->profile_photo_url;
                $Photo = Auth::user()->image;
            @endphp

            @if ($Photo == null)
                <img class="profile-img rounded-circle admin_picture" src="{{ $profilePhoto }}" alt="" />
            @else
                <img class="profile-img rounded-circle admin_picture" src="{{ asset("storage/profileImages/$Photo") }}"
                    alt="" />
            @endif
            <input type="file" class="choose-file" name="admin_image" id="admin_image" style=""
                accept="image/png, image/jpg, image/jpeg" />
            <img class="camera-icon" src="{{ asset('backend/assets/icon/camera.jpg') }}" id="change_picture_btn"
                alt="">
        </div>


    </x-slot>
</x-jet-form-section>
@include('backend.layout.modal._update_modal')
@include('backend.layout.modal._error_modal')
<script>
    $(function() {
        $(document).on('click', '#change_picture_btn', function() {
            $('#admin_image').click();
        });

        $('#admin_image').ijaboCropTool({
            preview: '.admin_picture',
            setRatio: 1,
            allowedExtensions: ['jpg', 'jpeg', 'png'],
            buttonsText: ['Crop', 'Cancel'],
            buttonsColor: ['#30bf7d', '#ee5155', -15],
            processUrl: '{{ route('adminPictureUpdate') }}',
            withCSRF: ['_token', '{{ csrf_token() }}'],
            onSuccess: function(message, element, status) {

                updateModal();
            },
            onError: function(message, element, status) {

                errorModal();
            }
        });
    });
</script>
