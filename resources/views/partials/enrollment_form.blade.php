<!-- resources/views/partials/enrollment_form.blade.php -->
<div class="modal fade" id="enrollmentModal" tabindex="-1" aria-labelledby="enrollmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enrollmentModalLabel">Enroll Now</h5>
                <button onclick="toggleEnrollModal()" type="button" class="btn-close btn-x-dismiss" data-bs-dismiss="modal" aria-label="Close">
                    <svg width="24" height="24" viewBox="0 0 24 24" tabIndex="-1" focusable="false">
                        <path
                            fill="#ccc"
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                        />
                        <path d="M0 0h24v24H0z" fill="none" />
                    </svg>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('enroll.request') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="congregation" class="form-label">Name of Congregation</label>
                        <input type="text" class="form-control" id="congregation" name="congregation" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Contact</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
