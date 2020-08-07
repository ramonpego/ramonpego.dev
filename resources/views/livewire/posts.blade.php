<div>

    <section >
        <input type="search" wire:model="search" class="bg-blue-100 rounded-b-md" id="">
        @forelse($posts as $post)
            <div class="box-border md:box-content block bg-gray-400 px-4 py-2 ">
                <div class="my-2 flex justify-between">
                    <div class="">
                        <div class="font-bold text-xl mb-2">
                            {{$post->title}}
                        </div>
                        <p class="text-gray-700 text-base">
                            {{$post->description}}
                        </p>
                    </div>
                    <small class=" text-red-200 hover:text-red-600" wire:click="remove({{$post->id}})">x</small>
                </div>
            </div>
        @empty
            <div>
                <h3>The's no post yet.</h3>
            </div>
        @endforelse
    </section>
</div>
