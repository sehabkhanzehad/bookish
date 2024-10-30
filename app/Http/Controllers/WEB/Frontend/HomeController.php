<?php

namespace App\Http\Controllers\WEB\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Brand;
use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\ChildCategory;
use App\Models\FlashSaleProduct;
use App\Models\FooterLink;
use App\Models\Footer;
use DB;
use App\Models\CustomPage;
use App\Models\Package;
use App\Models\Publication;
use App\Models\Subject;
use App\Models\Writer;
use Illuminate\Support\Facades\DB as FacadesDB;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use App\Models\Setting;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function profile()
    {
        $user = User::find(auth()->user()->id);
        $setting = Setting::first();
        $all_order_count = Order::where('user_id', $user->id)->count();
        $all_process_count = Order::where('user_id', $user->id)->where('order_status', 1)->count();
        $all_return_count = Order::where('user_id', $user->id)->where('order_status', 6)->count();

        $userId = auth()->user()->id;
        $orders = Order::with('orderProducts')->where('user_id', $userId)->get();
        $productArray = [];
        foreach ($orders as $order) {
            foreach ($order->orderProducts as $orderProduct) {
                $product = Product::find($orderProduct->product_id);
                if ($product->product_type == '3') {
                    $productArray[] = $product;
                }
            }
        }

        $freeproductArray = [];


        return view('frontend.dashboard', compact('user', 'setting', 'all_order_count', 'all_process_count', 'all_return_count', 'productArray', 'freeproductArray'));
    }

    public function contact()
    {

        return view('newFrontend.pages.contact');
    }

    public function about()
    {
        $testimonials = Testimonial::all();
        $popular_writers = Writer::where('is_popular', 1)->latest()->get();

        return view('newFrontend.pages.about-us', compact('testimonials', 'popular_writers'));
    }

    public function index()
    {
        $slider = Slider::where('status', 1)->orderBy('serial')->get();
        // dd($slider);
        $offer = AboutUs::find('2');
        $feateuredCategories = featuredCategories();
        $popularCats = popularCategories();

        $popularProducts = [];

        foreach ($popularCats as $pCats) {
            $poProducts = Product::where('category_id', $pCats->category_id)->where('is_recommended', 1)->orderBy("priority", "DESC")->limit(12)->get();
            $popularProducts[$pCats->category_id] = $poProducts;
        }

        $products = Product::with(['category', 'subCategory', 'childCategory'])
            ->where('status', 1)
            ->latest()
            ->take(25)
            ->get();
        $comp_pro = Product::latest()->get();
        $top_slider_banners = Banner::where('section', 'After Slider')->get();
        $before_footer = Banner::where('section', 'Before Footer')->get();
        $before_other_products = Banner::where('section', 'Before Other Products')->get();
        $after_pre_order = Banner::where('section', 'After Pre-order')->latest()->first();
        $before_package = Banner::where('section', 'Before Package')->latest()->first();
        $after_best_seller = Banner::where('section', 'After Best Seller')->latest()->first();
        $best_sellers = Product::where('is_best_seller', 1)->latest()->limit(8)->get();
        $popular_writers = Writer::where('is_popular', 1)->latest()->get();
        $popular_publications = Publication::where('status', 1)->latest()->get();
        $products = Product::with('category', 'subCategory', 'childCategory', 'brand')
            ->whereHas('brand', function ($q) {
                $q->whereSlug(request('slug'));
            })
            ->where('status', 1)->get();
        $subjects = Subject::whereHas('products')->where('is_home', 1)->get();
        $cat_wise_prod = Category::with('subCategories', 'products', 'activeSubCategories')
            ->has('products')
            ->where('status', 1)
            ->latest()
            ->get();
        $pre_orders = Product::with('writer')->where('pre_order', 1)->where('status', 1)->take(15)->get();
        $ebook_list = Product::where('product_type', 3)->where('status', 1)->take(15)->get();
        $packages_products = Product::whereNotNull('package_id')->where('status', 1)->take(15)->get();
        $packages = Package::where('is_home', 1)->where('status', 1)->get();
        // dd($cat_wise_prod);
        $about = FacadesDB::table('about_us')->first();
        // dd($about);

        $flashSell = FlashSaleProduct::with('product')->limit(10)->where('status', 1)->latest()->get();
        $firstColumns  = FooterLink::where('column', 1)->get();
        $secondColumns = FooterLink::where('column', 2)->get();
        $thirdColumns  = FooterLink::where('column', 3)->get();
        $categories = Category::with("products")->orderBy('name')->get();
        // dd($categories);
        $title  = Footer::first();
        $brands = Brand::where('status', 1)->get();

        $cart = session()->get('cart', []);

        $newPublished = Product::with('writer')->latest()->get();


        $testimonials = Testimonial::all();

        // return $testimonials;
        // die();
        // return view('frontend.home.index', compact(
        return view('newFrontend.pages.index', compact(
            'slider',
            'feateuredCategories',
            'products',
            'top_slider_banners',
            'before_footer',
            'before_other_products',
            'after_pre_order',
            'before_package',
            'after_best_seller',
            'best_sellers',
            'subjects',
            'popular_publications',
            'popular_writers',
            'pre_orders',
            'packages_products',
            'packages',
            'firstColumns',
            'secondColumns',
            'thirdColumns',
            'title',
            'brands',
            'flashSell',
            'cat_wise_prod',
            'cart',
            'comp_pro',
            'about',
            'popularCats',
            'popularProducts',
            'offer',
            'ebook_list',
            'newPublished',     // new
            'categories',
            'testimonials',

        ));
    }

    public function dowloadCatelog()
    {
        $catelog = Footer::first()->catelog;
        return response()->download(public_path('product_files/' . $catelog));
    }

    public function dowloadApk()
    {
        $footer = Footer::first();
        $apk = $footer->apk;
        $filePath = public_path('product_files/' . $apk);

        if (file_exists($filePath)) {
            $headers = [
                'Content-Type' => 'application/vnd.android.package-archive', // Set the MIME type for APK
            ];
            $fileName = basename($filePath);
            return response()->download($filePath, $fileName, $headers);
        } else {
            abort(404);
        }
    }

    public function pdfBook()
    {
        $userId = auth()->user()->id;
        $orders = Order::with('orderProducts')->where('user_id', $userId)->get();
        $productArray = [];
        foreach ($orders as $order) {
            foreach ($order->orderProducts as $orderProduct) {
                $product = Product::find($orderProduct->product_id);
                if ($product->product_type == '3') {
                    $productArray[] = $product;
                }
            }
        }

        return view('frontend.order.showPdf', compact('productArray'));
    }

    public function readPdf(Request $request)
    {
        $product = Product::find($request->id);
        $html = view('frontend.product.readBook', compact('product'))->render();
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }

    public function showProModal()
    {
        $productId = request()->productId;
        $product = Product::find($productId);
        $html = view('frontend.partials.commonModal', compact('product'))->render();
        return response()->json(['success' => true, 'html' => $html]);
    }

    public function subCategoriesByCategory(Request $request)
    {
        if ($request->type == 'subcategory') {
            $id = Category::whereSlug($request->slug)->first()->id;
            $categories = SubCategory::where(['category_id' => $id])->get();
            if ($categories->count() <= 0) {
                return redirect()->route('front.shop', ['slug' => $request->slug]);
            }

            return view('frontend.category.sub-category', compact('categories'));
        } else if ($request->type == 'childcategory') {
            $id = SubCategory::whereSlug($request->slug)->first()->id;
            $categories = ChildCategory::where(['sub_category_id' => $id])->get();
            if ($categories->count() <= 0) {
                return redirect()->route('front.shop', ['slug' => $request->slug]);
            }

            return view('frontend.category.child-category', compact('categories'));
        }
    }

    public function shop(Request $request, $slug = null)
    {
        $data = null;
        if (!empty($slug)) {
            $data = Category::with('products')->whereSlug($slug)->first();

            if (!$data) {
                $data = SubCategory::with('products')->whereSlug($slug)->first();
            }

            if (!$data) {
                $data = ChildCategory::with('products')->whereSlug($slug)->first();
            }
        }
        $writers = Writer::orderBy('name')->get();
        $publications = Publication::orderBy('title')->get();
        $subjects = Subject::orderBy('title')->get();
        $packages = Package::orderBy('title')->get();

        if ($data instanceof Category || $data instanceof SubCategory || $data instanceof ChildCategory) {
            $products = $data->products;
        } else {
            $products = Product::with(['category', 'subCategory', 'childCategory'])->where('status', 1)->take(30)->get();
        }
        $categories = Category::orderBy('name')->get();
        // Apply price range filter
        $minPrice = $products->min('price');
        $maxPrice = $products->max('price');

        $minPriceFilter = $request->input('min_price', $minPrice);
        $maxPriceFilter = $request->input('max_price', $maxPrice);

        $filteredProducts = $products->whereBetween('price', [$minPriceFilter, $maxPriceFilter]);

        // Apply availability filter
        $inStock = $request->input('in_stock');
        $outOfStock = $request->input('out_of_stock');

        if ($request->input('in_stock')) {
            $filteredProducts = $filteredProducts->where('qty', '>', 0);
        }

        if ($request->input('out_of_stock')) {
            $filteredProducts = $filteredProducts->where('sold_qty', '==', 'qty');
        }

        return view('newFrontend.pages.shop', compact('filteredProducts', 'minPrice', 'maxPrice', 'writers', 'packages', 'publications', 'subjects', 'categories'));
    }
    function ajaxProducts(Request $request)
    {
        $subcategories = $request->input('subcategory', []);
        $writers = $request->input('writer', []);
        $packages = $request->input('package', []);
        $subjects = $request->input('subject', []);
        $publications = $request->input('publication', []);
        $categories = $request->input('category', []);
        $ebooks = $request->input('ebook', []);
        $best_seller = $request->input('best_seller', []);
        $search = $request->search;
        $page = $request->input('page', 1);
        $perPage = 24;
        $query = Product::query();
        if ($categories || $search) {
            $query->orWhereIn('category_id', $categories);
        }
        if ($search) {
            $query->orWhere('name', 'LIKE', '%' . $search . '%');
        }
        if ($subcategories) {
            $query->orWhereIn('sub_category_id', $subcategories);
        }
        if ($writers) {
            $query->orwhereIn('writer_id', $writers);
        }
        if ($packages) {
            $query->orwhereIn('package_id', $packages);
        }
        if ($publications) {
            $query->orWhereIn('publication_id', $publications);
        }
        if ($subjects) {
            $query->orWhereIn('subject_id', $subjects);
        }
        if ($ebooks) {
            $query->where('product_type', 3);
        }
        if ($best_seller) {
            $query->where('is_best_seller', 1);
        }

        $sort = $request->input('sort', 'sort_by_relevancy_desc');
        // dd($sort);
        switch ($sort) {
            case 'discount_asc':
                $query->orderByRaw('(price - offer_price) / price ASC');
                break;
            case 'discount_desc':
                $query->orderByRaw('(price - offer_price) / price DESC');
                break;
            case 'price_asc':
                $query->orderBy('price', 'ASC');
                break;
            case 'price_desc':
                $query->orderBy('price', 'DESC');
                break;
            default:
                $query->latest();
        }
        $this->data['totalProducts'] = $query->count();
        $this->data['products'] = $query->where('status', 1)->paginate($perPage, ['*'], 'page', $page);
        // dd($this->data);
        $this->data['currentPage'] = $page;

        $this->data['perPage'] = $perPage;
        // return view('frontend.shop.partial.products', $this->data);
        return view('newFrontend.components.products', $this->data);
    }
    public function mostSellingProducts()
    {
        $products = Product::with(['category', 'subCategory', 'childCategory'])
            ->leftJoin('order_products as op', 'products.id', '=', 'op.product_id')
            ->selectRaw('products.*, COALESCE(sum(op.qty),0) total')
            ->groupBy('products.id')
            ->orderBy('total', 'desc')
            ->take(50)
            ->get();

        return view('frontend.shop.most-selling', compact('products'));
    }

    public function flashSellProducts(Request $request)
    {
        $data = null;


        $products = Product::with(['category', 'subCategory', 'childCategory'])->take(30)->get();
        //dd($flashProd);
        // Apply price range filter

        $minPrice = $products->min('price');
        $maxPrice = $products->max('price');

        $minPriceFilter = $request->input('min_price', $minPrice);
        $maxPriceFilter = $request->input('max_price', $maxPrice);

        $filteredProducts = $products->whereBetween('price', [$minPriceFilter, $maxPriceFilter]);

        // Apply availability filter
        $inStock = $request->input('in_stock');
        $outOfStock = $request->input('out_of_stock');

        if ($request->input('in_stock')) {
            $filteredProducts = $filteredProducts->where('qty', '>', 0);
        }

        if ($request->input('out_of_stock')) {
            $filteredProducts = $filteredProducts->where('sold_qty', '==', 'qty');
        }

        $flashSell = FlashSaleProduct::with('product')->where('status', 1)->latest()->get();

        return view('frontend.shop.flash-sell', compact('flashSell', 'filteredProducts', 'minPrice', 'maxPrice'));
    }

    public function customPages($slug)
    {
        $customPage = CustomPage::where('slug', $slug)->first();

        // dd($customPage);
        return view('newFrontend.pages.custom-pages', compact('customPage'));
    }
    function subjects()
    {
        $subject = request('search');
        $query = Subject::orderBy('order');
        if ($subject) {
            $query->where('title', 'LIKE', '%' . $subject . '%');
        }
        $this->data['subjects'] = $query->get();
        return view('newFrontend.pages.subjects', $this->data);
    }
    function writers()
    {
        $subject = request('search');
        $query = Writer::orderBy('order');
        if ($subject) {
            $query->where('name', 'LIKE', '%' . $subject . '%');
        }
        $this->data['writers'] = $query->get();
        return view('newFrontend.pages.authors', $this->data);
    }
    function publications()
    {
        $subject = request('search');
        $query = Publication::orderBy('order');
        if ($subject) {
            $query->where('title', 'LIKE', '%' . $subject . '%');
        }
        $this->data['subjects'] = $query->get();
        return view('newFrontend.pages.publication', $this->data);
    }
    function best_seller()
    {
        $this->data['products'] = Product::where('is_best_seller', 1)->paginate(12);
        return view('newFrontend.pages.best-seller', $this->data);
    }
    function pre_order()
    {
        $this->data['products'] = Product::where('pre_order', 1)->paginate(12);
        return view('newFrontend.pages.pre-order', $this->data);
    }
}
