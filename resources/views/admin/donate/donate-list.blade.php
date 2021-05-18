
<x-app-layout>
    <x-slot name="header">Bağışlar</x-slot>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <a href="{{route('donates.create')}}" class="btn btn-sm btn-danger "><i class="fa fa-plus"></i> Bağış Oluştur</a>
            </h5>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Bağış</th>
                    <th scope="col">Açıklama</th>
                    <th scope="col">Durum</th>
                    <th scope="col">Kan Grubu</th>
                    <th scope="col">İletişim</th>
                    <th scope="col">İstek Tarihi</th>
                    <th scope="col">İşlemler</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($donates as $donate)
                        
                    
                    <tr>
                        <th>{{$donate->title}}</th>
                        <td>{{$donate->description}}</td>
                        <td>{{$donate->status}}</td>
                        <td>{{$donate->blood_type}}</td>
                        <td>{{$donate->contact}}</td>
                        <td>{{$donate->created_at}}</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                            <a href="#" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
              {{$donates->links()}}
        </div>
    </div>
</x-app-layout>
