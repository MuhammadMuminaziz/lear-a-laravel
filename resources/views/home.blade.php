<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                <div class="card">
                    @endif
                    <div class="card-header">Welcome to my site</div>
                    <div class="card-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit atque nulla, ut nemo eius harum provident nesciunt assumenda, at, unde ipsa in aliquam quisquam nobis exercitationem eos ullam illum neque.</p>
                        <p>Nemo rerum magnam reiciendis sunt earum quam doloremque eius ab vel, tenetur suscipit, dolorum dolore totam hic laboriosam incidunt commodi maiores perferendis ducimus enim repellendus. Ipsa veritatis iure voluptatum impedit?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>