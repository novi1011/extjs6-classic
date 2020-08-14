var itemsPerPage = 5; //menampilkan data hanya 5 baris

Ext.define('MyApp.store.Personnel', {
    extend: 'Ext.data.Store',

    alias: 'store.personnel',
    autoLoad: true,
    autoSync: true, //untuk memastikan frontend dan backend sync

    fields: [
        'id', 'name', 'brands', 'color', 'created_at', 'updated_at'
    ],

    pageSize: itemsPerPage, //items per page

    proxy: {
        type: 'rest',
        url: 'http://localhost/cobalaravel/public/api/cars',
        
        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    }

});

