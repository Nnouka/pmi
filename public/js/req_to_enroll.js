function toggleEnrollModal() {
    // find modal
    const modal = document.querySelector('#enrollmentModal');
    if (modal != null) {
        modal.classList.toggle('show');
    }
}
