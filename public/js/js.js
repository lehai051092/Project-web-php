$(document).ready(function () {
    $("#search-customers").on("keyup", function () {
        let value = $(this).val();
        console.log(value);
        $.ajax({
            url: 'http://127.0.0.1:8000/customers/search',
            type: 'GET',
            dataType: 'json',
            data: {keyword: value},
            success: function (result) {
                let html = '';
                $.each(result, function (index, item) {
                    console.log(item)
                    html += `
                    <tr class="customer-' + item.id +'">
                    <th scope="row">${++index}</th>
                    <td>${item.name}</td>
                    <td>${item.age}</td>
                     <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    <td><button type="button" class="btn btn-primary">EDIT</button></td>
                </tr>
                   `;
                });
                $("#list-customers").html(html);
            }
        });
    });

    $('body').on('click','.delete-customer', function () {
        if (confirm("Are You Delete???")) {
            let customerId = $(this).data("id");
            $.ajax({
                url: 'http://127.0.0.1:8000/customers/'+customerId+'/delete',
                type: 'GET',
                dataType: 'json',
                success: function (result) {
                    $('.customer-' + customerId).remove();
                   alert(result.message);
                }
            });
        }
    });
});
