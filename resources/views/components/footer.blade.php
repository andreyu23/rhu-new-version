<script>
    function remove_data(id, type) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
            }
        });
    }
</script>

<div class="nk-footer">
    <div class="container-fluid">
        <div class="nk-footer-wrap">
            -
            <div class="nk-footer-copyright">RHU - Villanueva, Misamis Oriental &copy; 2024 Prenatal Care Management <a
                    href="#" target="_blank" style="color: #b4543d"></a> ❤️ All Rights Reserved.</div>

        </div>
    </div>
</div>
