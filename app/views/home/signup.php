
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Sign up</h5>
                    <?= $data['name'] ?? "" ?> <?= $data['msg'] ?? "" ?>
                    <?= $data['errmsg'] ?? ""?>
                    <form action="#" method="get">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="name@example.com">
                        </div>
                        <select class="form-select" name="gender" aria-label="Default select example">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                        <button type="submit" name="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>