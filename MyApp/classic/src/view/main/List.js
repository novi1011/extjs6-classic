/**
 * This view is an example list of people.
 */
Ext.define('MyApp.view.main.List', {
    extend: 'Ext.grid.Panel',
    xtype: 'mainlist',

    requires: [
        'MyApp.store.Personnel'
    ],

    title: 'Personnel',

    store: {
        type: 'personnel'
    },

    plugins: {
        ptype: 'rowediting'
    },
     
    columns: [
        // { text: 'Id', dataIndex: 'id', width: 80 },
        { text: 'Name', dataIndex: 'name', editor: 'textfield'}, 
        { text: 'Brand', dataIndex: 'brands', editor: 'textfield' },
        { text: 'Color', dataIndex: 'color', editor: 'textfield' },
        { text: 'Created_At', dataIndex: 'created_at', width: 200 },
        { text: 'Updated_At', dataIndex: 'updated_at', width: 200 }
    ],
   
    tbar: [{
        xtype: 'button',
        text: 'Add',
        handler: 'onAddClick'
    },{
        xtype: 'button',
        text: 'Remove',
        reference: 'btnRemoveCars',
        handler: 'onRemoveClick',
        disabled: true,
        id: 'delete'  
    }],

    listeners: {
        select: 'onItemSelected'
    }
});
