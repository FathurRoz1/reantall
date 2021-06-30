'use strict';

let tableName = '#customersTable';
$(tableName).DataTable({
    scrollX: true,
    deferRender: true,
    scroller: true,
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
        url: recordsURL,
    },
    columnDefs: [
        {
            'targets': [9],
            'orderable': false,
            'className': 'text-center',
            'width': '8%',
        },
    ],
    columns: [
        {
            data: 'CUSTNAME',
            name: 'CUSTNAME'
        },{
            data: 'CUSTADDR',
            name: 'CUSTADDR'
        },{
            data: 'CUSTPHONE',
            name: 'CUSTPHONE'
        },{
            data: 'CUSTEMAIL',
            name: 'CUSTEMAIL'
        },{
            data: 'CUSTIDENTITY',
            name: 'CUSTIDENTITY'
        },{
            data: 'CUSTBIRTH',
            name: 'CUSTBIRTH'
        },{
            data: 'CUSTPICT',
            name: 'CUSTPICT'
        },{
            data: 'CUSTGENDER',
            name: 'CUSTGENDER'
        },{
            data: 'CUSTCOMPANY',
            name: 'CUSTCOMPANY'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];
                                
                return prepareTemplateRender('#customersTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Customer');
});
