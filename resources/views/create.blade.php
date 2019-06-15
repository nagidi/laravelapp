@extends('layout.mainlayout');
<div class="container">
        <form method="post" action="/register">
        {{ csrf_field() }}
            <div class="row">  
            <!-- Message -->
            @if(Session::get('message') !='')
                <div class="col-md-12" >
                <br>
                <div class = "alert alert-success">{{ Session::get('message') }}</div></div>
                @endif
                <div class="col-md-6">
                    <h3>Personal Information</h3>
                    <div class="form-group">
                        <label for="inputTitle">
                            Title/Prefix <span class="required">*</span>
                        </label>
                        <select class="custom-select " name="inputTitle" id="inputTitle">
                            <option value="">Select Title/Prefix</option>
                            <option value="Mr" @if (old('inputTitle') == 'Mr') {{ 'selected' }} @endif>Mr</option>
                            <option value="Ms" @if (old('inputTitle') == 'Ms') {{ 'selected' }} @endif>Ms</option>
                        </select>
                        @if( !!$errors->first('inputTitle')) <small id="inputTitle" class="text-danger">Please select Title/Prefix.</small> @endif
    
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputFirstName">
                                    Given First name<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control"  value="{{ old('inputFirstName') }}"  id="inputFirstName" name="inputFirstName" placeholder="First name" >
                                 @if( !!$errors->first('inputFirstName')) <small id="inputFirstName" class="text-danger">Firstname required.</small> @endif
                            </div>
                            <div class="col">
                                <label for="inputLastName">
                                    Last name/ Surname/ Family name<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" value="{{ old('inputLastName') }}" id="inputLastName" name="inputLastName" placeholder="Last name" >
                                @if( !!$errors->first('inputLastName')) <small id="inputLastName" class="text-danger">LastName Required.</small> @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputOtherName">
                            Other Offcial Name
                        </label>
                        <input type="text" class="form-control" value="{{ old('inputOtherName') }}" id="inputOtherName" name="inputOtherName" placeholder="Other Offcial Name ">
                    </div>
                    <div class="form-group">
                        <label for="inputGender">
                            Gender <span class="required">*</span>
                        </label>
                        <select class="custom-select " id="inputGender" name="inputGender"  name="inputGender">
                            <option  value="">Select Your Gender</option>
                            <option value='Male' @if (old('inputGender') == 'Male') {{ 'selected' }} @endif>Male</option>
                            <option value="Female" @if (old('inputGender') == 'Female') {{ 'selected' }} @endif>Female</option>
                        </select>
                        @if( !!$errors->first('inputGender')) <small id="inputGender" class="text-danger">Please select Gender.</small> @endif
                    </div>
                    <div class="form-group">
                        <label for="inputBirth">
                            Dat of Birth<span class="required">*</span>
                        </label>
                        <input type="date" class="form-control" id="inputdobBirth" value="{{ old('inputdobBirth') }}" name="inputdobBirth" placeholder="mm/dd/yyyy">
                        @if( !!$errors->first('inputdobBirth')) <small id="inputdobBirth" class="text-danger">Please Enter Dob.</small> @endif
 
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputCCountry">
                                    County of Citizinship<span class="required">*</span>
                                </label>
                                <select class="custom-select " name="inputCCountry" id="inputCCountry">
                                    <option value="">Select Country</option>
                                    <option value="Algeria"  @if (old('inputCCountry') == 'Algeria') {{ 'selected' }} @endif>Algeria</option>
                                    <option value="Andorra"  @if (old('inputCCountry') == 'Andorra') {{ 'selected' }} @endif>Andorra</option>
                                    <option value="Angola"  @if (old('inputCCountry') == 'Angola') {{ 'selected' }} @endif>Angola</option>
                                </select>
                                @if( !!$errors->first('inputCCountry')) <small id="inputCCountry" class="text-danger">Please select Citizinship.</small> @endif
                            </div>
                            <div class="col">
                                <label for="inputCountry">
                                    County of Birth<span class="required">*</span>
                                </label>
                                <select class="custom-select " id="inputBirth" name="inputBirth">
                                    <option value="">Select Country Birth</option>
                                    <option value="Algeria" @if (old('inputBirth') == 'Algeria') {{ 'selected' }} @endif>>Algeria</option>
                                    <option value="Andorra" @if (old('inputBirth') == 'Andorra') {{ 'selected' }} @endif>>Andorra</option>
                                    <option value="Angola" @if (old('inputBirth') == 'Angola') {{ 'selected' }} @endif>>Angola</option>
                                </select>
                                @if( !!$errors->first('inputBirth')) <small id="inputBirth" class="text-danger">Please Enter Date.</small> @endif 
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
                                <input type="text" class="form-control" id="inputAddress1" name="inputAddress1"  value="{{ old('inputAddress1') }}" placeholder="Address1">
                                @if( !!$errors->first('inputAddress1')) <small id="inputAddress1" class="text-danger">Please Enter Address1.</small> @endif 
                            </div>
                            <div class="col">
                                <label for="inputAddress2">
                                    Address1<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputAddress2" value="{{ old('inputAddress2') }}" name="inputAddress2" placeholder="Address2">
                                @if( !!$errors->first('inputAddress2')) <small id="inputAddress2" class="text-danger">Please Enter Address2.</small> @endif 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <label for="inputCity">
                                    City<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputCity" value="{{ old('inputCity') }}" name="inputCity" placeholder="City">
                                @if( !!$errors->first('inputCity')) <small id="inputCity" class="text-danger">Please Enter city.</small> @endif 
                            </div>
                            <div class="col">
                                <label for="inputLastName">
                                    Postal Code<span class="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="inputPostalCode" value="{{ old('inputPostalCode') }}" name="inputPostalCode" placeholder="Postal Code">
                                @if( !!$errors->first('inputPostalCode')) <small id="inputPostalCode" class="text-danger">Please Enter postel code.</small> @endif 
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCountry">
                            Country<span class="required">*</span>
                        </label>
                        <select class="custom-select " id="inputCountry" name="inputCountry">
                            <option value="">Select Country</option>
                            <option value="Algeria" @if (old('inputCountry') == 'Algeria') {{ 'selected' }} @endif>Algeria</option>
                            <option value="Andorra" @if (old('inputCountry') == 'Andorra') {{ 'selected' }} @endif>Andorra</option>
                            <option value="Angola" @if (old('inputCountry') == 'Angola') {{ 'selected' }} @endif>Angola</option>
                        </select>
                        @if( !!$errors->first('inputCountry')) <small id="inputCountry" class="text-danger">Please Enter Country.</small> @endif 
                    </div>
                    <div class="form-group">
                        <label for="inputProvince">
                            Province<span class="required">*</span>
                        </label>
                        <select class="custom-select " name="inputProvince" id="inputProvince">
                            <option value="">Select Province</option>
                            <option value="ON" @if (old('inputProvince') == 'ON') {{ 'selected' }} @endif>ON</option>
                            <option value="AP" @if (old('inputProvince') == 'AP') {{ 'selected' }} @endif>Ap</option>
                            <option value="Tl" @if (old('inputProvince') == 'Tl') {{ 'selected' }} @endif>Tl</option>
                        </select>
                        @if( !!$errors->first('inputProvince')) <small id="inputProvince" class="text-danger">Please Select Province.</small> @endif 
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">
                            Email Address
                        </label>
                        <input type="Email" class="form-control" value="{{ old('inputEmail') }}" id="inputEmail" name="inputEmail"  placeholder="Email Address ">
                        @if( !!$errors->first('inputEmail')) <small id="inputEmail" class="text-danger">Please Enter Email.</small> @endif 
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="inputPhone">
                                            Code
                                        </label>
                                        <input type="text" class="form-control"  value="{{ old('inputCode') }}"  id="inputCode"  name="inputCode" placeholder="Code">
                                    </div>
                                    <div class="col-8">
                                        <label>&nbsp; 
                                        </label>
                                        <input type="text" class="form-control" value="{{ old('inputcPhone') }}" id="inputcPhone" name="inputcPhone" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-4">
                                        <label for="inputCell">
                                            Cell
                                        </label>
                                        <input type="text" class="form-control" value="{{ old('inputCell') }}" id="inputCell" name="inputCell" placeholder="Code">
                                    </div>
                                    <div class="col-8">
                                        <label>&nbsp; 
                                        </label>
                                        <input type="text" class="form-control"  value="{{ old('inputPhone') }}" id="inputPhone" placeholder="Cell">
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