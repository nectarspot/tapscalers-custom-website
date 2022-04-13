<!DOCTYPE html>
<html lang="en">
<head>
	<title>TapScalers</title>
	<?php include 'includes/snippets/meta-data-no-index.php' ?>
    <style>
        <?php include 'includes/css/basics.css' ?>
        <?php include 'includes/css/header.css' ?>
        <?php include 'includes/css/style.css' ?>
        <?php include 'includes/css/footer.css' ?>
    </style>
</head>
<body>

<?php include 'includes/snippets/header.php' ?>


<!-- START TOP BANNER AREA  -->
<div class="top-area-bg ptb-60">
    <div class="container">
        <h1 class="slider-head text-center mb-0">Tell Us More About The <span class="orange-color">Project</span></h1>
    </div>
</div>

<!-- END TOP BANNER AREA  -->

<div class="ptb-60">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-md-6">
                    <label class="label-text" for="SingleLine2">Name <span class="orange-color">*</span></label>
                    <input type="text" name="SingleLine2" id="SingleLine2" class="form-input" />
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="Email">Email <span class="orange-color">*</span></label>
                    <input type="email" name="Email" id="Email" class="form-input" />
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="international_PhoneNumber_countrycode">Phone</label>
                    <input type="text" name="PhoneNumber_countrycode" id="international_PhoneNumber_countrycode" class="form-input" />
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="SingleLine3">Company Name</label>
                    <input type="text" name="SingleLine3" id="SingleLine3" class="form-input" />
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="Address_City">City</label>
                    <input type="text" name="Address_City" id="Address_City" class="form-input" />
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="SingleLine">Project Title</label>
                    <input type="text" name="SingleLine" id="SingleLine" class="form-input" />
                </div>
                <div class="col-md-12">
                    <label class="label-text" for="Dropdown">Project Area</label>
                    <select name="Dropdown" id="Dropdown" class="form-input">
                        <option selected="true" value="-Select-">-Select-</option>
                        <option value="Marketing Strategy">Marketing Strategy</option>
                        <option value="Marketing Analysis and Research">Marketing Analysis and Research</option>
                        <option value="New Market Entry Plan">New Market Entry Plan</option>
                        <option value="Marketing Collateral and Presentation">Marketing Collateral and Presentation</option>
                        <option value="Digital Marketing and Advertising">Digital Marketing and Advertising</option>
                        <option value="Pricing Strategy">Pricing Strategy</option>
                        <option value="Business Planning">Business Planning</option>
                        <option value="Financial Projection and Analysis">Financial Projection and Analysis</option>
                        <option value="Presentation Development">Presentation Development</option>
                        <option value="Fund Raising and Pitch Book Preparation">Fund Raising and Pitch Book Preparation</option>
                        <option value="Advice on Business Viability">Advice on Business Viability</option>
                        <option value="Advice on Starting a Business">Advice on Starting a Business</option>
                        <option value="Process flow Optimization">Process flow Optimization</option>
                        <option value="Cash flow Analysis and Projection">Cash flow Analysis and Projection</option>
                        <option value="Performance edit on Benchmarks">Performance edit on Benchmarks</option>
                        <option value="Financial Reporting">Financial Reporting</option>
                        <option value="Company Valuation">Company Valuation</option>
                        <option value="Business Consulting">Business Consulting</option>
                        <option value="Data Cleaning and Basic Analytics">Data Cleaning and Basic Analytics</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <label class="label-text" for="MultiLine">Project Description</label>
                    <textarea name="MultiLine" id="MultiLine" class="form-textarea"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="SingleLine1">Approx. Budget (in USD)</label>
                    <input type="text" name="SingleLine1" id="SingleLine1" class="form-input" />
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="Dropdown1">Budget Type (Optional)</label>
                    <select name="Dropdown1" id="Dropdown1" class="form-input">
                        <option selected="true" value="-Select-">-Select-</option>
                        <option value="Fixed Budget Contract">Fixed Budget Contract</option>
                        <option value="Time &amp; Material Contract">Time &amp; Material Contract</option>
                        <option value="Value Gain Contract">Value Gain Contract</option>
                        <option value="Not Sure Yet">Not Sure Yet</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="Dropdown2">Duration of the Project (Optional)</label>
                    <select name="Dropdown2" id="Dropdown2" class="form-input">
                        <option selected="true" value="-Select-">-Select-</option>
                        <option value="Less than one week">Less than one week</option>
                        <option value="1 Week - 2 Weeks">1 Week - 2 Weeks</option>
                        <option value="2 Week - 4 Weeks">2 Week - 4 Weeks</option>
                        <option value="4 Week - 12 Weeks">4 Week - 12 Weeks</option>
                        <option value="More than 12 Weeks">More than 12 Weeks</option>
                        <option value="Ongoing Project">Ongoing Project</option>
                        <option value="Not Defined Yet">Not Defined Yet</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="label-text" for="Dropdown3">Estimated Workload (Optional)</label>
                    <select name="Dropdown3" id="Dropdown3" class="form-input">
                        <option selected="true" value="-Select-">-Select-</option>
                        <option value="Fire Drill (40+ hours per week)">Fire Drill (40+ hours per week)</option>
                        <option value="Intense (25 to 40+ hours per week)">Intense (25 to 40+ hours per week)</option>
                        <option value="Moderate (15 to 25 hours per week)">Moderate (15 to 25 hours per week)</option>
                        <option value="Relaxed (Less than 15 hours per week)">Relaxed (Less than 15 hours per week)</option>
                        <option value="Not Sure Yet">Not Sure Yet</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="label-text">Project File 1 (Optional)</label>
                    <input type="file" name="">
                </div>
                <div class="col-md-6">
                    <label class="label-text">Project File 2 (Optional)</label>
                    <input type="file" name="">
                </div>
                <div class="col-md-12">
                    <input type="submit" name="" value="Submit" class="form-submit-btn mt-5">
                </div>
            </div>
        </form>
    </div>
</div>


<!-- <div class="blocks-section">
    <div class="container">
        <h2 class="sub-heading text-center">Why choose Scalers to execute <span class="orange-color">'on demand' & 'short term'</span> Projects?</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 text-center mb-4">
                <img src="images/icon1.svg" width="60" height="60" alt="Icon" class="mb-4" />
                <h3 class="sub-sub-head">Pre-Screened & Affordable Business Experts</h3>
                <p>Get pre-screened top notch MBAs & experts for part time work at fraction of cost vis-a-vis leading consulting firms</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-4">
                <img src="images/icon1.svg" width="60" height="60" alt="Icon" class="mb-4" />
                <h3 class="sub-sub-head">Functional & Domain Business Experts</h3>
                <p>Get deep domain & functional insights from verified Scalers, working on your projects, to solve business problems</p>
            </div>
            <div class="col-lg-4 col-md-6 text-center mb-4">
                <img src="images/icon1.svg" width="60" height="60" alt="Icon" class="mb-4" />
                <h3 class="sub-sub-head">Real Time Visibility on Project Timelines</h3>
                <p>Get project deliverables on time & full visibility on project status through dashboards & updates from Client Partners</p>
            </div>
        </div>
    </div>
</div> -->




<?php include 'includes/snippets/footer.php' ?>
</body>
</html>