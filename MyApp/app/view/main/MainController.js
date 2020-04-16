/**
 * This class is the controller for the main view for the application. It is specified as
 * the "controller" of the Main view class.
 *
 * TODO - Replace this content of this view to suite the needs of your application.
 */
Ext.define('MyApp.view.main.MainController', {
    extend: 'Ext.app.ViewController',

    alias: 'controller.main',

    onItemSelected: function (sender, record) {
        var button = Ext.ComponentQuery.query('button#delete')[0];
        console.log(button)
        button.enable(true)
    },

    onRemoveClick: function(button, grid, rowIndex, colIndex){
        //console.log({grid, rowIndex, colIndex})

        if (grid) {
            var grid = button.up('mainlist');
            var model = grid.getStore().getAt(rowIndex);
           
            
        if (!model){
            Ext.Msg.alert('Info', 'No Record Selected');
        }

            Ext.Msg.confirm('Remove Record', 'Are you sure want to delete?',
            function (button) {
                if (button == 'yes') {
                var model = grid.getSelectionModel().getSelection();
                grid.store.remove(model);
                grid.store.sync()
                }   
            });
        }
    },

    onConfirm: function (choice) {
        if (choice === 'yes') {
            //
        }
    },

    onAddClick: function (button, event) {
        //buat model baru
        var list = button.up('mainlist');
        let store = list.getStore();
        let rowediting = list.getPlugin();

        store.setAutoSync(false);
        // location.reload();
         
        var record = {
            name : "",
            brands: "",
            color : "",
            };
            
        var model =store.getModel();
        record = new model(record);
        store.insert(0, record); 
        rowediting.startEdit(record, 0);
        store.setAutoSync(true);
        //grid.editingPlugin.startEdit(record, 0);
        // rowediting.startEdit(record, 0);
        // window.rowediting = rowediting;   
        }
});
