$(document).ready(function () {
      // ✅ Initialize DataTable with ALL COLUMNS Visible
      $('#customerTable').DataTable({
        "paging": true,         // Enable pagination
        "searching": true,      // Enable search
        "ordering": true,       // Enable sorting
        "info": true,           // Show info
        "responsive": false,    // ✅ Prevents automatic hiding of columns
        "scrollX": true,        // ✅ Enables horizontal scrolling (if needed)
        "autoWidth": false,     // ✅ Prevents column width issues
        "lengthMenu": [10, 25, 50, 100],
        "order": [[0, "desc"]],
        "language": {
          "search": "Filter records:",
          "lengthMenu": "Show _MENU_ entries"
        }
      });
      
        var table = $('#customerTable').DataTable();

        // Search by Name (Column Index 2)
        $('#nameSearch').on('keyup', function () {
            table.column(2).search(this.value).draw();
        });

        // Search by Email (Column Index 5)
        $('#emailSearch').on('keyup', function () {
            table.column(5).search(this.value).draw();
        });

        // Search by Phone Number (Column Index 4)
        $('#phoneSearch').on('keyup', function () {
            table.column(4).search(this.value).draw();
        });
        // ✅ Keep Sidebar Functional
          $('.toggle-sidebar-btn').on('click', function () {
            $('#sidebar').toggleClass('hidden');
          });

      $(document).on('click', '.update-status', function (e) {
        event.preventDefault();
        const row = $(this).closest('tr');
        const id = row.data('id');
        const description = row.data('description');
        const status = row.data('status');

        $('#rowId').val(id);
        $('#data').text(id);
        $('#description').val(description);
        $('#status').val(status);

        $('#statusModal').modal('show');
      });

      // ✅ Handle form submission with AJAX
      $('#updateStatusForm').on('submit', function (e) {
        e.preventDefault();
        $.ajax({
          url: 'update_status.php',
          type: 'POST',
          data: $(this).serialize(),
          success: function (response) {
            alert(response);
            $('#statusModal').modal('hide');
            location.reload();
          },
          error: function () {
            alert('Error updating status.');
          }
        });
      });
    });
  
    // Filter by Status (Column Index 13)
    $('#statusFilter').on('change', function () {
        var status = this.value;
        if (status) {
            table.column(13).search(status).draw();
        } else {
            table.column(13).search("").draw();
        }
    });
    // Sidebar toggle
    $("#sidebarToggle").click(function () {
        $("#sidebar").toggleClass("collapsed");
        $("#main").toggleClass("expanded");

        // ✅ Fix DataTable resizing when sidebar is toggled
        setTimeout(function () {
            $('#customerTable').DataTable().columns.adjust().responsive.recalc();
        }, 300);
    });
    // Convert lead button
    $(document).on('click', '.convert-lead', function () {
        let leadId = $(this).data('id');

        if (confirm("Are you sure you want to convert this lead?")) {
            $.ajax({
                url: 'https://voiptechsolutions.com/voip/function.php', // ✅ Call functions.php directly
                type: 'POST',
                data: { action: 'convertLead', lead_id: leadId }, // ✅ Include action
                success: function (response) {
                    alert(response);
                    if (response.includes("successfully")) {
                        location.reload();
                    }  // ✅ Reload to reflect changes
                },
                error: function () {
                    alert('Error converting lead.');
                }
            });
        }
    });

    // $('#UserTable').DataTable(); // Initialize DataTable

    // // ✅ Open Edit User Modal
    // $(document).on('click', '.edit-user', function () {
        
    //     let userId = $(this).data('id');
    //     let username = $(this).data('username');
    //     let email = $(this).data('email');
    //     let role = $(this).data('role');

    //     $('#userId').val(userId);
    //     $('#username').val(username);
    //     $('#email').val(email);
    //     $('#role').val(role);
    //     $('#password').val(''); // Reset password field

    //     // ✅ Fetch assigned pages via AJAX
    //     $.post("https://voiptechsolutions.com/voip/function.php", { action: "getUserAssignedPages", user_id: userId }, function (data) {
    //         let assignedPages = JSON.parse(data).map(String); // Convert to strings for comparison

    //         $('#pages option').each(function () {
    //             $(this).prop('selected', assignedPages.includes($(this).val()));
    //         });

    //         $('#pages').trigger('change'); // ✅ Update UI properly
    //     });

    //     $('#userModalLabel').text('Edit User');
    //     $('#userModal').modal('show');
    // });


    // // ✅ Open Add User Modal
    // function openAddUserModal() {
    //     $('#userId').val('');
    //     $('#username').val('');
    //     $('#email').val('');
    //     $('#password').val('');
    //     $('#role').val('user');
    //     $('#pages option').prop('selected', false);

    //     $('#userModalLabel').text('Add New User');
    // }

    // // ✅ Handle Delete User with AJAX
    // $('.delete-user').click(function () {
    //     let userId = $(this).data('id');
    //     if (confirm('Are you sure you want to delete this user?')) {
    //         $.post('users.php', { delete_user: userId }, function () {
    //             location.reload();
    //         });
    //     }
    // });

