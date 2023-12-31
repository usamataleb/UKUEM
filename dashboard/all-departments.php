<?php
require_once("./header.php");
require_once("./nav.php") ?>

<div class="db-info-wrap ">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h4>Department Dashboard</h4>
        <span style="position: relative;">
            <select id="contributionYear" class="form-control" style="width: 100px; appearance: none; -webkit-appearance: none; -moz-appearance: none; background-color: transparent;" name="contributionYear">
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
            <i class="fas fa-caret-down" style="position: absolute; right: 8px; top: 50%; transform: translateY(-50%);"></i>
        </span>
    </div>

    <div class="row">
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-blue">
                    <i class="fa fa-building"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Number Of Departments</h4>
                    <h5 id="total_departments" ></h5>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-blue">
                    <i class="fa fa-users"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Number Of Members</h4>
                    <h5 id="number_members" ></h5>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-green">
                    <i class="fas fa-donate"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Total Contributions </h4>
                    <h5> 5,200</h5>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-xl-3 col-sm-6">
            <div class="db-info-list">
                <div class="dashboard-stat-icon bg-purple">
                    <i class="fa fa-truck-loading"></i>
                </div>
                <div class="dashboard-stat-content">
                    <h4>Overdue</h4>
                    <h5>-18,520</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    Available Departments
                </div>
                <div class="card-body">
                    <table class="table" id="table_item">
                        <thead>
                            <tr>
                                <th> Number </th>
                                <th> Name </th>
                                <th> Head </th>
                                <th> Members </th>
                                <th> Contributions </th>
                                <th> Status </th>
                            </tr>
                        </thead>

                        <tr>

                        </tr>
                        <tbody id="departments">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Item -->
        <div class="col-xl-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    UKUEM Profile
                </div>
                <div class="card-body text-left">
                    <div class="row">
                        <div class="col">
                            <h5>Member Details</h5>
                            <h5>Member Number:</h5>
                            <p>234546667</p>
                            <h5>Employer Name:</h5>
                            <p>USAMA TALIB JUMA</p>
                            <h5>Employer Number:</h5>
                            <p>9898979</p>
                            <h5>Date of Birth:</h5>
                            <p>19-6-1909</p>
                            <h5>Date of Join:</h5>
                            <p>24-3-2020</p>
                        </div>
                        <div class="col">
                            <h5>Contribution Details</h5>
                            <h5>First Contribution Period:</h5>
                            <p>Mar 2020</p>
                            <h5>June 98 Credit:</h5>
                            <p>Aug 2020</p>
                            <h5>June 98 Balance:</h5>
                            <p>0</p>
                            <h5>Total Credits:</h5>
                            <p>18</p>
                            <h5>Total Contribution:</h5>
                            <p>TSH 7,000,459.89</p>
                        </div>
                        <div class="col">
                            <h5>Payment Details</h5>
                            <h5>Last Paid Date:</h5>
                            <p>-</p>
                            <h5>Last Paid Amount:</h5>
                            <p>-</p>
                            <h5>Claimed Credits:</h5>
                            <!-- <p></p> -->
                            <h5>Paid Credits:</h5>
                            <p>18</p>
                            <h5>Unclaimed Credits:</h5>
                            <p>18</p>
                            <h5>Unclaimed Contributions:</h5>
                            <p>TSH 7,000,459.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once("./footer.php") ?>