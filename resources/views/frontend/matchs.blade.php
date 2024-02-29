@foreach(DB::table('clubs')
->select('id', 'club_name')
->groupBy('club_name', 'id')
->get() as $clubname)
    <option value="{{ $clubname->id }}">{{ $clubname->club_name }}</option>
@endforeach
