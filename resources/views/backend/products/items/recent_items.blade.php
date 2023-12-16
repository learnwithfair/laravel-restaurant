<div class="card">
    <div class="card-body">
        <div class="d-flex flex-row justify-content-between">
            <h4 class="card-title">Recent Products</h4>
            <a href="" class="text-info mb-1 small">View all</a>
        </div>
        <div class="preview-list" style="height: 443px;overflow:hidden">
            @php
                $items = [0, 1, 2, 3, 4, 5, 6, 7, 8];
            @endphp
            <marquee behavior="scroll" direction="up" onmouseover="this.stop()" onmouseout="this.start()"
                scrollamount="5">
                @foreach ($items as $item)
                    <a href="" class="preview-item border-bottom dropdown-item">
                        <div class="preview-thumbnail">
                            <img src="{{ asset('backend/assets/images/faces/face6.jpg') }}" alt="image"
                                class="rounded-circle border border-red" />
                        </div>
                        <div class="preview-item-content d-flex flex-grow">
                            <div class="flex-grow">
                                <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                    <h6 class="preview-subject text-white">Leonard</h6>
                                    <p class="text-muted text-small">5 minutes ago</p>
                                </div>
                                <p class="text-muted">Well, it seems to be working now.</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </marquee>
        </div>
    </div>
</div>
