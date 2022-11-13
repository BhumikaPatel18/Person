
     <div class="form-group">

              {{-- <input type="text" class="form-control" name="name" value="{{  }}"/> --}}
              </div>


              {!! Form::label('name', 'Name'); !!}
              {!! Form::text('name',$post->name ?? '',['class'=>'form-control']); !!}

          <div class="form-group">
              <label for="DOB">DOB :</label>
              {{-- <input type="date" class="form-control" name="DOB" value="{{ $post->DOB ?? '' }}"/> --}}
              {!! Form::date('DOB','',['class'=>'form-control']); !!}
          </div>

          <div class="form-group">
              <label for="age">Age :</label>
              {{-- <input type="number" class="form-control" name="age" value="{{ $post->age ?? '' }}"/> --}}
              {!! Form::number('age','',['class'=>'form-control']); !!}
          </div>

          <div class="form-group">
              <label for="phone_no">Phone_no :</label>
              {{-- <input type="number" class="form-control" name="phone_no" value="{{ $post->phone_no ?? '' }}"/> --}}
              {!! Form::number('phone_no','', ['class'=>'form-control']); !!}
          </div>

          <div class="form-group">
              <label for="email">Email :</label>
              {{-- <input type="email" class="form-control" name="email" value="{{ $post->email ?? '' }}"/> --}}
              {!! Form::email('email','', ['class'=>'form-control']); !!}
          </div>

          <div class="form-group">
              <label for="password">Password :</label>
              {{-- <input type="password" class="form-control" name="password" value="{{ $post->password ?? '' }}"/> --}}
              {!! Form::password('password',['class'=>'form-control']); !!}
          </div>

           {{-- <div class="form-group">
            <label for="gender">Gender :</label>
            <input type="radio" class="form-control" name="gender" value="{{ $post->gender }}"/>
        </div> --}}
{{--
          <div class="form-group">
            {{-- <label for="radiotext">Select Your Gender :   </label> --}}
             {!! Form::label('radiotext','Select your Gender : '); !!}

          <div class="form-check-inline">
              <label class="form-check-label">
                {{-- <input type="radio" class="form-check-input" name="gender" id="gender" value="{{ $post->gender ?? 'Male' }}">Male --}}
                {!! Form::label('gender','Female'); !!}
                {!! Form::radio('gender','Female',['id'=>'gender','class'=>'form-control']); !!}
                {{-- {!! Form::radio('gender',$post->gender ?? 'Male',['class'=>'form-check-input','id'=>'gender']) !!} --}}
            </label>
            </div>
            <div class="form-check-inline">
              <label class="form-check-label ">
                {{-- <input type="radio" class="form-check-input" name="gender" id="gender" value="{{ $post->gender ?? 'Female' }}">Female  --}}
                {!! Form::label('gender','Male'); !!}
                {!! Form::radio('gender','Male',['id'=>'gender','class'=>'form-control']); !!}
              </label>
            </div>
            <div class="form-check-inline disabled">
              <label class="form-check-label">
                  {!! Form::label('gender','others'); !!}
                {!! Form::radio('gender','Others',['id'=>'gender','class'=>'form-control']); !!}
              </label>
            </div>
          </div>

          {{-- <div class="form-group">
            <label for="hobby">Hobby :</label>
            <input type="checkbox" class="form-control" name="hobby" value="{{ $post->hobby }}"/>
        </div> --}}

         <div class="form-group">
            <label for="checkbox">Select Your hobbies</label>
    <div class="form-check">
        <label class="form-check-label">
          {{-- <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="{{ $post->hobby ?? 'Travelling' }}">Travelling --}}
        {!! Form::checkbox('hobby','Traveling', ['id'=>'hobby','class'=>'form-control']); !!}
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          {{-- <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="{{ $post->hobby ?? 'Indore Games' }}">Indore Games --}}
          {!! Form::checkbox('hobby','Indore Games', ['id'=>'hobby','class'=>'form-control']); !!}
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          {{-- <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="{{ $post->hobby ?? 'Outdore Games' }}">Outdore Games --}}
          {!! Form::checkbox('hobby','Outdore games', ['id'=>'hobby','class'=>'form-control']); !!}
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          {{-- <input type="checkbox" class="form-check-input" name="hobby" id="hobby" value="{{ $post->hobby ?? 'art' }}">art --}}
          {!! Form::checkbox('hobby','art', ['id'=>'hobby','class'=>'form-control']); !!}
        </label>
      </div>
        </div>
          <div class="form-group">
              <label for="description">Description :</label>
              <input type="text" class="form-control" name="description" value="{{ $post->description  ?? ''}}"/>
              {!! Form::text('description','', ['class'=>'form-control']) !!}
          </div>

