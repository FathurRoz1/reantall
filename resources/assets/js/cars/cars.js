'use strict';

let tableName = '#carsTable';
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
            'targets': [12],
            'orderable': false,
            'className': 'text-center',
            'width': '8%',
        },
    ],
    columns: [
        {
            data: 'IDCAT',
            name: 'IDCAT'
        },{
            data: 'IDBRAND',
            name: 'IDBRAND'
        },{
            data: 'CARNAME',
            name: 'CARNAME'
        },{
            data: 'CARSEAT',
            name: 'CARSEAT'
        },{
            data: 'CARCOLOR',
            name: 'CARCOLOR'
        },{
            data: 'CARFUEL',
            name: 'CARFUEL'
        },{
            data: 'CARNUMBER',
            name: 'CARNUMBER'
        },{
            data: 'CARCYLINDER',
            name: 'CARCYLINDER'
        },{
            data: 'CARFEATURE',
            name: 'CARFEATURE'
        },{
            data: 'CARYEAR',
            name: 'CARYEAR'
        },{
            data: 'PRICE',
            name: 'PRICE'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];
                                
                return prepareTemplateRender('#carsTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Car');
});
