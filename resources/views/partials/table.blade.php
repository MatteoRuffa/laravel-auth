<table id="mr-table" class="table table-dark table-hover shadow mb-2 mt-3">
    <thead>
        <tr>
            <th scope="col">#id Project</th>
            <th scope="col">Project Title</th>
            <th scope="col" class="d-none d-xl-table-cell">Created at</th>
            <th scope="col" class="d-none d-lg-table-cell">Categories</th>
            <th scope="col" class=" {{ Route::currentRouteName() === 'admin.projects.index' ? '' : 'd-none' }}">
                Amministration Actions</th>
        </tr>
    </thead>
  <tbody>
  @foreach ($elements as $element)
            <tr>
                <td><a>{{ $element->id }} </a></td>
                <td><a>{{ $element->title }}</a></td>
                <td class="d-none d-xl-table-cell"><a>{{ $element->created }}</a></td>
                <td class="d-none d-lg-table-cell"><a>{{ $element->categories }}</a></td>
                </td>
                <td class=" {{ Route::currentRouteName() === 'admin.projects.index' ? '' : 'd-none' }}">
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('admin.projects.show', $element) }}" class="table-icon m-1">
                            <div class="icon-container">
                                <i class="fas fa-info-circle"></i>
                            </div>
                        </a>
                        <a href="{{ route('admin.projects.edit', $element) }}" class="table-icon m-1">
                            <div class="icon-container">
                                <i class="fas fa-pencil-alt"></i>
                            </div>
                        </a>
                        <form id="delete-form" action="{{ route('admin.projects.destroy', $element->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="table-icon fs-3 m-1 no-border"
                                type="submit" data-element-id="{{ $element->id }}"
                                data-element-title="{{ $element->title }}">
                                <div class="icon-container">
                                    <i class="fa-solid fa-trash-can "></i>
                                </div>
                            </button>
                        </form>
                    </div>

                </td>
            </tr>
        @endforeach
  </tbody>
</table>