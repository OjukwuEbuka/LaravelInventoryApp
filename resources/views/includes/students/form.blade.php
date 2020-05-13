<input type="hidden" name="stdstatus" value="1" />
    <input type="hidden" name="stdschoolId" value="{{ $school->id }}" />
    <div class="row ">
        <!-- <div class="col s12 m8  offset-m4"> -->
            <div class="col s12 m4 center">
            <video src="" id="video">Video not available</video>
            </div>
            <div class="col s12 m4 center">
            <input type="submit" class="btn btn-default" style="background-color:#333;color:#fff" id="startbutton" value="Take a photo" disabled/>
            </div>

            <canvas id="canvas">            
            </canvas>

            <div class="col s12 m4 output center">
                <img src="" name="imageFile" alt="" id="photo">
            </div>
        <!-- </div> -->
    </div>

        <br />
        <hr />
        <input type="hidden" name="stdimgFile" id="imgFile" value="" />
        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6" >
                <label class="form-label">First Name</label>
                <input type="text" name="stdfirstName" class="form-control inform "  value="{{ $student->firstName ?? '' }}">
                <input type="hidden" name="stdregNo" value="holder">
            </div>
            <div class="input-field col s12 m6">
                <label class="form-label">Middle Name</label>
                <input type="text" name="stdotherName" class="form-control inform"  value="{{ $student->otherName ?? '' }}">
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Last Name <small>(SurName)</small></label>
                <input type="text" name="stdlastName" class="form-control inform"  value="{{ $student->lastName ?? '' }}">
            </div>
            
            <div class="input-field col s12 m6">
                <!-- <label class="form-label">Class</label> -->
                <select name="stdcurrentClassId" class="browser-default">
                    <option value=""> Choose New Class </option>
                    @foreach($allClass as $classroom)
                        <option value="{{ $classroom->id }}">{{ $classroom->level.$classroom->suffix}}</option>
                    @endforeach
                    </select>
                    <!-- <label for="classroom" >Choose Class</label> -->
                {{--<input type="text" name="stdcurrentClassId" class="form-control inform"  value="{{ $student->currentClassId ?? '' }}">--}}
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class=" col s12 m6">
                <label for="DOA" class="form-label">Date of Admission</label>
                <input id="DOA" type="date" name="stddoa" class="form-control inform"  value="{{ $student->doa ?? '' }}">
            </div>
            <div class=" col s12 m6">
                <label for="DOB" class="form-label">Date of Birth</label>
                <input id="DOB" type="date" name="stddob" class="form-control inform"  value="{{ $student->dob ?? '' }}">
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6 ">
                <select name="stdstate_of_origin_id" class="text-left" id="selectState">
                    @foreach($states as $state)
                        @if(isset($student->state_of_origin_id) && $student->state_of_origin_id == $state->id)
                            <option class="stateId" value="{{ $student->state_of_origin_id }}" selected>
                            {{ $state->state }}
                            </option>
                        @else
                            <option class="stateId" value="{{ $state->id }}">
                            {{ $state->state }}
                            </option>
                        @endif
                    @endforeach
                </select>
                <label class="form-label">State of Origin</label>
            </div>
            <div class="input-field col s12 m6">
                <select name="stdlga_id" class="form-control inform" id="stateLgas" >
                @if(isset($student->lga_id))
                    @foreach($lgas as $lga)
                        @if($student->lga_id == $lga->id)
                            <option value="{{ $student->lga_id }}">
                            {{ $lga->lga }}
                            </option>
                        @endif
                    @endforeach
                @endif
                @foreach($lgas as $lga)
                    @if($lga->state_id == 1)
                        <option value='{{ $lga->id}}'> {{ $lga->lga }}</option>
                    @endif
                @endforeach
                </select>
                <label class="form-label">LGA of Origin</label>
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Postal Address</label>
                <input type="text" name="stdpostalAddress" class="form-control inform"  value="{{ $student->postalAddress ?? '' }}">
            </div>
            <div class="input-field col s12 m6">
                <label class="form-label">Residential City</label>
                <input type="text" name="stdresidentialCity" class="form-control inform"  value="{{ $student->residentialCity ?? '' }}">
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Hometown</label>
                <input type="text" name="stdhometown" class="form-control inform"  value="{{ $student->hometown ?? '' }}">
            </div>
            <div class="input-field col s12 m6">
                <!-- <label class="form-label">Religion id</label> -->
                <select name="stdreligion_id" class="browser-default">
                    <option value=""> Choose Religion </option>
                    @foreach($religion as $rel)
                        @if(isset($student->religion_id) && $student->religion_id == $rel->id)
                            <option value="{{ $student->religion_id }}" selected>{{ $rel->religion }}</option>
                        @else
                            <option value="{{ $rel->id }}">{{ $rel->religion }}</option>
                        @endif
                    @endforeach
                </select>
                    <!-- <label for="classroom" >Choose Class</label> -->
                {{--<input type="text" name="stdreligionId" class="form-control inform"  value="{{ $student->religionId ?? '' }}">--}}
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <!-- <label class="form-label">Former School id</label> -->
                <select name="stdformer_school_id" class="browser-default" value="{{ $student->former_school_id ?? '' }}">
                    <option value=""> Former School </option>
                    <option value="0"> Not Available </option>
                    @foreach($allSchools as $school)
                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                    @endforeach
                </select>
                {{--<input type="text" name="stdformerSchoolId" class="form-control inform inform"  value="{{ $student->formerSchoolId ?? '' }}">--}}
            </div>
            <div class="input-field col s12 m6">
                <select id="gender" name="stdgender" class="browser-default" value="{{ $student->gender ?? '' }}">
                <option value="">Choose Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option>
                </select>
                <!-- <label for="gender" class="">Gender</label> -->
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Phone Number</label>
                <input type="text" name="stdphoneNumber" class="form-control inform"  value="{{ $student->phoneNumber ?? '' }}">
            </div>
            <!-- <div class="input-field col s12 m6">
                <label class="form-label">Creator's Id</label>
                <input type="text" name="stdcreatedBy" class="form-control inform"  value="{{ $student->createdBy ?? '' }}">
            </div> -->
        </div>
    
    

    
        <br />

        <h4 style="text-align:center">Parent Information</h4>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <select name="prttitle" class="form-control inform" value="{{ $student->guardian->title ?? '' }}">
                <option value ='MR'>MR</option>
                <option value ='MRS'>MRS</option>
                <option value ='MR&MRS'>MR & MRS</option>
                </select>
                <label class="form-label" style="text-align:center;">Title</label>
            </div>
            <div class="input-field col s12 m6">
                <select class="form-control inform">
                    @foreach($maritalStatus as $rel)
                        @if(isset($student->guardian->marital_status_id) && $student->guardian->marital_status_id == $rel->id)
                            <option value="{{ $student->guardian->marital_status_id }}" selected>{{ $rel->maritalStatus }}</option>
                        @else
                            <option value="{{ $rel->id }}">{{ $rel->maritalStatus }}</option>
                        @endif
                    @endforeach
                </select>
                <label name="prtmaritalStatusId" class="form-label">Marital Status</label>
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6" >
                <label class="form-label">First Name</label>
                <input type="text" name="prtfirstName" class="form-control inform "  value="{{ $student->guardian->firstName ?? '' }}">
            </div>
            <div class="input-field col s12 m6">
                <label class="form-label">Last Name</label>
                <input type="text" name="prtlastName" class="form-control inform"  value="{{ $student->guardian->lastName ?? '' }}">
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Other Name</label>
                <input type="text" name="prtotherName" class="form-control inform"  value="{{ $student->guardian->otherName ?? '' }}">
            </div>
            <div class="input-field col s12 m6">
                <label class="form-label">Occupation</label>
                <input type="text" name="prtoccupation" class="form-control inform"  value="{{ $student->guardian->occupation ?? '' }}">
                </select>
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Phone Number </label>
                <input type="text" name="prtphoneNo" class="form-control inform"  value="{{ $student->guardian->phoneNo ?? '' }}">
            </div>
            <div class="input-field col s12 m6">
                <label class="form-label">Email</label>
                <input type="text" name="prtemail" class="form-control inform"  value="{{ $student->guardian->email ?? '' }}">
                </select>
            </div>
        </div>

        <div class="row  d-flex justify-content-center">
            <div class="input-field col s12 m6">
                <label class="form-label">Office Phone Number </label>
                <input type="text" name="prtofficePhone" class="form-control inform"  value="{{ $student->guardian->officePhone ?? '' }}">
            </div>
            <div class="input-field col s12 m6">
                <label class="form-label">Office Address</label>
                <input type="text" name="prtofficeAddress" class="form-control inform"  value="{{ $student->guardian->officeAddress ?? '' }}">
                </select>
            </div>
        </div>