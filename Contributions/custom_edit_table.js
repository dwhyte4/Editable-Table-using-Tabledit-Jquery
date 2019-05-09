$(document).ready(function(){
    var table = $('#data_table').Tabledit({
        deleteButton: true,
        editButton: true, 
        saveButton: true,
        addButton: true,
        saveButton: true,
        columns: {
            identifier: [0, 'id'],
            editable: [[0, 'id'],[1, 'user_id'], [2, 'name'], [3, 'week_id'], [4, 'hours'], [5, 'task']]
        },
        hideIdentifier: true,
        url: 'live_edit.php',
    });
});

