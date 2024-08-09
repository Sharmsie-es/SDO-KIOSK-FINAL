


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDO KIOSK Admin Page</title>
    <link rel="stylesheet" href="<?php echo e(asset('web/css/adminstyle.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <div class="d-flex justify-content-center mb-4">
                    <img src="/web/images/logo.png" alt="Logo" class="logo main-logo" />
                </div>
                <h2 class="section-heading">ACCOUNTS</h2>
                <br>
                <ul class="list-unstyled">
                    <li><input type="checkbox"> Queue and Feedback</li>
                    <li><input type="checkbox"> Organizational Chart</li>
                    <li><input type="checkbox"> Citizen Charter</li>
                </ul>
            </div>
            <div class="col-md-10 main">
                <div class="header d-flex justify-content-between align-items-center mb-3">
                    <h1>ADMIN PANEL</h1>
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="Filter">
                        <button class="btn btn-primary ms-2"><i class="fas fa-search"></i></button>
                    </div>
                    <div>
                        <button class="btn-dark-custom">+ Add New File Record</button>
                    </div>
                    <a href="<?php echo e(url('/homepage')); ?>" class="btn btn-primary active">Go Back</a>
                </div>
                <div class="table-container mb-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>File ID</th>
                                <th>File Name</th>
                                <th>Description</th>
                                <th>More Info</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Name</td>
                                <td>Description</td>
                                <td>...</td>
                                <td class="action-buttons">
                                    <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                                    <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>...</td>
                                <td class="action-buttons">
                                    <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                                    <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>...</td>
                                <td class="action-buttons">
                                    <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                                    <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                                </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>...</td>
                              <td class="action-buttons">
                                  <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                                  <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                              </td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>...</td>
                            <td class="action-buttons">
                                <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                                <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                            </td>
                        </tr>
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td>...</td>
                          <td class="action-buttons">
                              <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                              <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                          </td>
                      </tr>
          
               
                  <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>...</td>
                    <td class="action-buttons">
                        <button class="btn btn-primary active btn-sm"><i class="material-icons">edit</i></button>
                        <button class="btn btn-danger btn-sm"><i class="material-icons">delete</i></button>
                    </td>
                </tr>
               
                        </tbody>
                    </table>
                </div>
                <div class="pagination d-flex justify-content-center">
                    <button class="btn btn-light">Previous</button>
                    <button class="btn btn-primary active">1</button>
                    <button class="btn btn-light">2</button>
                    <button class="btn btn-light">3</button>
                    <button class="btn btn-light">4</button>
                    <button class="btn btn-light">5</button>
                    <button class="btn btn-light">Next</button>
                </div>
                <!-- Background upload form -->
                <div class="upload-container mt-5">
                    <form action="<?php echo e(url('/upload-background')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="mb-3">
                            <label for="background" class="form-label">Upload Background Image</label>
                            <input class="form-control" type="file" id="background" name="background">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\Users\Sharmie\SDO KIOSK OJT SIMBULAN\SDO_KIOSK\resources\views/web/admin.blade.php ENDPATH**/ ?>