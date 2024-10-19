document.addEventListener('DOMContentLoaded', function () {
    var loading = $('#loading')
    var fade = $('#fade')
    $(document).ready(function () {
        $("#convertForm").on('submit', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            loading.addClass('d-flex');
            fade.addClass('d-block');
            $.ajax({
                type: 'POST',
                url: '/convert/convert',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    var data = JSON.parse(response);
                    loading.removeClass('d-flex');
                    fade.removeClass('d-block');
                    if (data.error) {
                        alert(data.error);
                    } else {
                        fetch(data.fileURL)
                            .then(response => response.arrayBuffer())
                            .then(buffer => {
                                const decoder = new TextDecoder('utf-8');
                                const text = decoder.decode(buffer);
                                var processedTxt = text.split('\n').map(line => line.replace(/\s+/g, ' ')).join('\n');
                                var processedTxtBlob = new Blob([processedTxt], { type: 'text/plain;charset=utf-8' });
                                var processedTxtFile = URL.createObjectURL(processedTxtBlob);
                                document.getElementById("textArea").value = processedTxt;
                                document.getElementById("downloadLink").href = processedTxtFile;
                                document.getElementById("downloadLink").download = data.fileName.replace('converted', 'processed');
                                $.ajax({
                                    type: 'POST',
                                    url: '/convert/history',
                                    data: JSON.stringify({ content: processedTxt }),
                                    contentType: 'application/json',
                                    success: function (response) {
                                        console.log(response);
                                        console.log("Data submitted to convert/history successfully.");
                                    },
                                    error: function (error) {
                                        console.log("Error submitting data to convert/history:", error);
                                    }
                                });
                            })
                            .catch(error => console.error('Error:', error));
                    }
                },
                error: function (error) {
                    // Xử lý lỗi
                    console.log(error);
                }
            });
        });
    });        
})
