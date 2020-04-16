Ext.define('MyApp.store.Personnel', {
    extend: 'Ext.data.Store',

    alias: 'store.personnel',
    autoLoad: true,
    autoSync: true, //untuk memastikan frontend dan backend sync

    fields: [
        'id', 'name', 'brands', 'color', 'created_at', 'updated_at'
    ],

    proxy: {
        type: 'jsonp',
        api:{
            read: "http://localhost/extjs-classic/MyApp_php/readpersonnel.php",
            update: "http://localhost/extjs-classic/MyApp_php/update.php",
            create: "http://localhost/extjs-classic/MyApp_php/create.php",
            destroy: "http://localhost/extjs-classic/MyApp_php/destroy.php"
        },
        reader: {
            type: 'json',
            rootProperty: 'items'
        }
    }
});
