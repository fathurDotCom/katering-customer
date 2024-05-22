function appSubmit(e) {
    e.preventDefault()
    let self = $(e.currentTarget)
    let formData = new FormData(e.currentTarget)

    $.ajax({
        url: self.attr('action'),
        method: self.attr('method'),
        data: formData,
        processData: false,
        contentType: false,
        beforeSend: () => {
            appLoader()
        },
        success: (response) => {
            appSuccess(response)
        },
        error: (error) => {
            appError(error.responseJSON)
        }
    })
    
}

function appLoader() {
    Swal.fire({
        title: "Loading...",
        html: "Please wait for a moment.",
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading();
        }
    })
}

function appSuccess(response) {
    Swal.fire({
        title: "Success",
        html: response.message,
        icon: "success"
    });
}

function appError(error) {
    Swal.fire({
        title: "Failed",
        html: error.message,
        icon: "error"
    });
}

function appDelete(e, {data, success}) {

    e.preventDefault()
    let self = $(e.currentTarget)

    Swal.fire({
        html: `Are you sure want to delete this data?`,
        icon: "question",
        buttonsStyling: false,
        showCancelButton: true,
        confirmButtonText: "Delete!",
        cancelButtonText: 'Cancel',
        customClass: {
            confirmButton: "btn btn-primary",
            cancelButton: 'btn btn-danger'
        }
    }).then((result) => {
        if (result.isConfirmed) {
            
            $.ajax({
                url: self.attr('href'),
                method: 'DELETE',
                data,
                beforeSend: () => {
                    appLoader()
                },
                success: (response) => {
                    success()
                    appSuccess(response)
                },
                error: (error) => {
                    appError(error)
                }
            })
            
        }
    });

}