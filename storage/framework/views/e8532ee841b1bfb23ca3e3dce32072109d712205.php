;
<div class="container">
        <form method="post" action="/register">
        <?php echo e(csrf_field()); ?>

            <div class="row">  
            <!-- Message -->
            <?php if(Session::get('message') !=''): ?>
                <div class="col-md-12" >
                <br>
                <div class = "alert alert-success"><?php echo e(Session::get('message')); ?></div></div>
                <?php endif; ?>
                <div class="col-md-6">
                    <h3>Personal Information</h3>
                    <div class="form-group">
                        <label for="inputTitle">
                            Title/Prefix <span class="required">*</span>
                        </label>
                        <select class="custom-select " name="inputTitle" id="inputTitle">
                            <option value="">Select Title/Prefix</option>
                            <option value="Mr" <?php if(old('inputTitle') == 'Mr'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Mr</option>
                            <option value="Ms" <?php if(old('inputTitle') == 'Ms'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ms</option>
                        </select>
                        <?php if( !!$errors->first('inputTitle')): ?> <small id="inputTitle" class="text-danger">Please select Title/Prefix.</small> <?php endif; ?>
    
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputFirstName">
                                    Given First name<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control"  value="<?php echo e(old('inputFirstName')); ?>"  id="inputFirstName" name="inputFirstName" placeholder="First name" >
                                 <?php if( !!$errors->first('inputFirstName')): ?> <small id="inputFirstName" class="text-danger">Firstname required.</small> <?php endif; ?>
                            </div>
                            <div class="col">
                                <label for="inputLastName">
                                    Last name/ Surname/ Family name<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" value="<?php echo e(old('inputLastName')); ?>" id="inputLastName" name="inputLastName" placeholder="Last name" >
                                <?php if( !!$errors->first('inputLastName')): ?> <small id="inputLastName" class="text-danger">LastName Required.</small> <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputOtherName">
                            Other Offcial Name
                        </label>
                        <input type="text" class="form-control" value="<?php echo e(old('inputOtherName')); ?>" id="inputOtherName" name="inputOtherName" placeholder="Other Offcial Name ">
                    </div>
                    <div class="form-group">
                        <label for="inputGender">
                            Gender <span class="required">*</span>
                        </label>
                        <select class="custom-select " id="inputGender" name="inputGender"  name="inputGender">
                            <option  value="">Select Your Gender</option>
                            <option value='Male' <?php if(old('inputGender') == 'Male'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Male</option>
                            <option value="Female" <?php if(old('inputGender') == 'Female'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Female</option>
                        </select>
                        <?php if( !!$errors->first('inputGender')): ?> <small id="inputGender" class="text-danger">Please select Gender.</small> <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="inputBirth">
                            Dat of Birth<span class="required">*</span>
                        </label>
                        <input type="date" class="form-control" id="inputdobBirth" value="<?php echo e(old('inputdobBirth')); ?>" name="inputdobBirth" placeholder="mm/dd/yyyy">
                        <?php if( !!$errors->first('inputdobBirth')): ?> <small id="inputdobBirth" class="text-danger">Please Enter Dob.</small> <?php endif; ?>
 
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputCCountry">
                                    County of Citizinship<span class="required">*</span>
                                </label>
                                <select class="custom-select " name="inputCCountry" id="inputCCountry">
                                    <option value="">Select Country</option>
                                    <option value="Algeria"  <?php if(old('inputCCountry') == 'Algeria'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Algeria</option>
                                    <option value="Andorra"  <?php if(old('inputCCountry') == 'Andorra'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andorra</option>
                                    <option value="Angola"  <?php if(old('inputCCountry') == 'Angola'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Angola</option>
                                </select>
                                <?php if( !!$errors->first('inputCCountry')): ?> <small id="inputCCountry" class="text-danger">Please select Citizinship.</small> <?php endif; ?>
                            </div>
                            <div class="col">
                                <label for="inputCountry">
                                    County of Birth<span class="required">*</span>
                                </label>
                                <select class="custom-select " id="inputBirth" name="inputBirth">
                                    <option value="">Select Country Birth</option>
                                    <option value="Algeria" <?php if(old('inputBirth') == 'Algeria'): ?> <?php echo e('selected'); ?> <?php endif; ?>>>Algeria</option>
                                    <option value="Andorra" <?php if(old('inputBirth') == 'Andorra'): ?> <?php echo e('selected'); ?> <?php endif; ?>>>Andorra</option>
                                    <option value="Angola" <?php if(old('inputBirth') == 'Angola'): ?> <?php echo e('selected'); ?> <?php endif; ?>>>Angola</option>
                                </select>
                                <?php if( !!$errors->first('inputBirth')): ?> <small id="inputBirth" class="text-danger">Please Enter Date.</small> <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>Contact Information</h3>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputAddress1">
                                    Address1<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputAddress1" name="inputAddress1"  value="<?php echo e(old('inputAddress1')); ?>" placeholder="Address1">
                                <?php if( !!$errors->first('inputAddress1')): ?> <small id="inputAddress1" class="text-danger">Please Enter Address1.</small> <?php endif; ?> 
                            </div>
                            <div class="col">
                                <label for="inputAddress2">
                                    Address1<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputAddress2" value="<?php echo e(old('inputAddress2')); ?>" name="inputAddress2" placeholder="Address2">
                                <?php if( !!$errors->first('inputAddress2')): ?> <small id="inputAddress2" class="text-danger">Please Enter Address2.</small> <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputCity">
                                    City<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputCity" value="<?php echo e(old('inputCity')); ?>" name="inputCity" placeholder="City">
                                <?php if( !!$errors->first('inputCity')): ?> <small id="inputCity" class="text-danger">Please Enter city.</small> <?php endif; ?> 
                            </div>
                            <div class="col">
                                <label for="inputLastName">
                                    Postal Code<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputPostalCode" value="<?php echo e(old('inputPostalCode')); ?>" name="inputPostalCode" placeholder="Postal Code">
                                <?php if( !!$errors->first('inputPostalCode')): ?> <small id="inputPostalCode" class="text-danger">Please Enter postel code.</small> <?php endif; ?> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCountry">
                            Country<span class="required">*</span>
                        </label>
                        <select class="custom-select " id="inputCountry" name="inputCountry">
                            <option value="">Select Country</option>
                            <option value="Algeria" <?php if(old('inputCountry') == 'Algeria'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Algeria</option>
                            <option value="Andorra" <?php if(old('inputCountry') == 'Andorra'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Andorra</option>
                            <option value="Angola" <?php if(old('inputCountry') == 'Angola'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Angola</option>
                        </select>
                        <?php if( !!$errors->first('inputCountry')): ?> <small id="inputCountry" class="text-danger">Please Enter Country.</small> <?php endif; ?> 
                    </div>
                    <div class="form-group">
                        <label for="inputProvince">
                            Province<span class="required">*</span>
                        </label>
                        <select class="custom-select " name="inputProvince" id="inputProvince">
                            <option value="">Select Province</option>
                            <option value="ON" <?php if(old('inputProvince') == 'ON'): ?> <?php echo e('selected'); ?> <?php endif; ?>>ON</option>
                            <option value="AP" <?php if(old('inputProvince') == 'AP'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Ap</option>
                            <option value="Tl" <?php if(old('inputProvince') == 'Tl'): ?> <?php echo e('selected'); ?> <?php endif; ?>>Tl</option>
                        </select>
                        <?php if( !!$errors->first('inputProvince')): ?> <small id="inputProvince" class="text-danger">Please Select Province.</small> <?php endif; ?> 
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">
                            Email Address
                        </label>
                        <input type="Email" class="form-control" value="<?php echo e(old('inputEmail')); ?>" id="inputEmail" name="inputEmail"  placeholder="Email Address ">
                        <?php if( !!$errors->first('inputEmail')): ?> <small id="inputEmail" class="text-danger">Please Enter Email.</small> <?php endif; ?> 
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="inputPhone">
                                            Code
                                        </label>
                                        <input type="text" class="form-control"  value="<?php echo e(old('inputCode')); ?>"  id="inputCode"  name="inputCode" placeholder="Code">
                                    </div>
                                    <div class="col-8">
                                        <label>&nbsp; 
                                        </label>
                                        <input type="text" class="form-control" value="<?php echo e(old('inputcPhone')); ?>" id="inputcPhone" name="inputcPhone" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="inputCell">
                                            Cell
                                        </label>
                                        <input type="text" class="form-control" value="<?php echo e(old('inputCell')); ?>" id="inputCell" name="inputCell" placeholder="Code">
                                    </div>
                                    <div class="col-8">
                                        <label>&nbsp; 
                                        </label>
                                        <input type="text" class="form-control"  value="<?php echo e(old('inputPhone')); ?>" id="inputPhone" placeholder="Cell">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <button class="btn btn-primary" type="submit">Submit form</button>
            
             

 
        </form>
    </div>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>