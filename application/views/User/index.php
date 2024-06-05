<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
            <form action="<?php echo site_url('user/save') ?>" method="post"  > 
                <a href="<?php echo site_url('user/add') ?>"><i class="fas fa-plus"></i> Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="tabelkelas" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $no = 1;
                                foreach ($user as $user) {
                                ?>
                                 <tr>
                                     <td><?php echo $no; ?></td>
                                     <td><?php echo $user->username; ?></td>
                                     <td><?php echo $user->email; ?></td>
                                     <td><?php echo $user->phone; ?></td>
                                     <td><?php echo $user->role; ?></td>
                                     <td>
                                         <div class="d-flex justify-content-center">
                                             <a href="<?php echo base_url('user/getedit/' . $user->id); ?>" class="btn btn-sm btn-info me-1"><i class="fas fa-edit"></i> Edit</a>
                                             <a href="<?php echo base_url('user/delete/' . $user->id); ?>" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Ingin menghapus data user ini?');">
                                                 <i class="fas fa-trash"></i> Hapus
                                             </a>
                                         </div>
                                     </td>
                                 </tr>
                             <?php
                                    $no++;
                                }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div style="height: 100vh"></div>
    </div>
</main>