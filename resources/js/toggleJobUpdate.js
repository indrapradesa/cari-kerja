import Swal from 'sweetalert2';

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.toggle-switch').forEach(function(toggle) {
        toggle.addEventListener('change', function() {
            const jobId = this.dataset.id;
            const isActive = this.checked ? 1 : 0;

            fetch(`/admin/loker-partners/${jobId}/update-status`, {
                method: 'PATCH',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    // id: jobId,
                    is_open: isActive
                })
            })
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Job status updated successfully',
                    showConfirmButton: false,
                    timer: 1500
                });
            })
            .catch(error => {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'An error occurred while updating job status'
                });
                // Revert the toggle switch state
                this.checked = !isActive;
            });
        });
    });
});
