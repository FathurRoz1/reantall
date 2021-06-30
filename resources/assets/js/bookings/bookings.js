'use strict';

let tableName = '#bookingsTable';
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
            'targets': [8],
            'orderable': false,
            'className': 'text-center',
            'width': '8%',
        },
    ],
    columns: [
        {
            data: 'IDCAR',
            name: 'IDCAR'
        },{
            data: 'IDCUST',
            name: 'IDCUST'
        },{
            data: 'BOOKSTART',
            name: 'BOOKSTART'
        },{
            data: 'BOOKEND',
            name: 'BOOKEND'
        },{
            data: 'BOOKDEST',
            name: 'BOOKDEST'
        },{
            data: 'BOOKPICK',
            name: 'BOOKPICK'
        },{
            data: 'BOOKTOTAL',
            name: 'BOOKTOTAL'
        },{
            data: 'BOOKSTATUS',
            name: 'BOOKSTATUS'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];
                                
                return prepareTemplateRender('#bookingsTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    let recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Booking');
});
