<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Interfaces\AboutRepositoryInterface;
use App\Interfaces\BlogRepositoryInterface;
use App\Interfaces\HomepageRepositoryInterface;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\TeamRepositoryInterface;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\TermCondition;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct(
        private ProductRepositoryInterface         $productRepository,
        private HomepageRepositoryInterface       $homepageRepository,
        private ProductCategoryRepositoryInterface $productCategoryRepository,
        private BlogRepositoryInterface $blogRepository,
        private AboutRepositoryInterface $aboutRepository,
        private TeamRepositoryInterface $teamRepository,
    )
    {

    }

    public function index()
    {
        $sliders = $this->homepageRepository->list();
        $products = $this->productRepository->featuresServices();
        $category = $this->productCategoryRepository->parentCategory();
        return view('frontend.index',compact('products','category','fProducts','sliders'));
    }

    public function about()
    {
        $about = $this->aboutRepository->detail();
        return view('frontend.about',compact('about'));
    }

    public function products()
    {

        $products = $this->productRepository->activeList();
        $trendProducts = $this->productRepository->trendServices();
        $category = $this->productCategoryRepository->parentCategory();
        return view('frontend.shop', compact('products', 'trendProducts', 'category'));
    }

    public function productShow($id)
    {

        $product = $this->productRepository->findById($id);
        $product->load(['category', 'images','faqs']);
        $relatedProducts = Product::with(['images'])->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id) // Exclude current product
            ->inRandomOrder() // Randomize results
            ->limit(3) // Get only 3 products
            ->get();
        return view('frontend.product-show', compact('product','relatedProducts'));
    }


    public function team()
    {
        $teams = $this->teamRepository->activeList();
        return view('frontend.team',compact('teams'));
    }


    public function termConditions()
    {
       $termConditions = TermCondition::first();
        return view('frontend.term-conditions',compact('termConditions'));
    }

    public function privacyPolicy()
    {
       $privacyPolicy = PrivacyPolicy::first();
        return view('frontend.privacy-policy',compact('privacyPolicy'));
    }

    public function blog()
    {
        $blogs = $this->blogRepository->activeList();
        return view('frontend.blog',compact('blogs'));
    }


    public function blogShow($id)
    {
        $blog = $this->blogRepository->findById($id);
        return view('frontend.blog-single',compact('blog'));
    }


    public function contact()
    {
        return view('frontend.contact');
    }


}
