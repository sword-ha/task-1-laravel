@csrf
<label>Name</label>
<input type="text" name="name" value="{{ old('name', $user->name ?? '') }}">
@error('name') <div class="error">{{ $message }}</div> @enderror
<label>Email</label>
<input type="email" name="email" value="{{ old('email', $user->email ?? '') }}">
@error('email') <div class="error">{{ $message }}</div> @enderror
<label>Password {{ isset($user) ? '(leave blank to keep)' : '' }}</label>
<input type="password" name="password">
@error('password') <div class="error">{{ $message }}</div> @enderror
<p><button class="btn">Save</button> <a class="btn btn-gray" href="{{ route('users.index') }}">Cancel</a></p>
