<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Interfaces\AboutRepositoryInterface;
use App\Interfaces\BlogRepositoryInterface;
use App\Interfaces\HomepageRepositoryInterface;
use App\Interfaces\ProductCategoryRepositoryInterface;
use App\Interfaces\ProductRepositoryInterface;
use App\Interfaces\TeamRepositoryInterface;
use App\Models\BlogComment;
use App\Models\ContactUs;
use App\Models\PrivacyPolicy;
use App\Models\Product;
use App\Models\SupportQuery;
use App\Models\TermCondition;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class PagesController extends BaseController
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
        $contact = ContactUs::first();
        $teams = $this->teamRepository->activeList();
        $testimoinals = Testimonial::where('status', 'Active')->get();
        return view('frontend.index',compact('products','category','sliders','contact','teams','testimoinals'));
    }

    public function about()
    {
        $about = $this->aboutRepository->detail();
        $teams = $this->teamRepository->activeList();
        return view('frontend.about',compact('about','teams'));
    }

    public function products()
    {

        $products = $this->productRepository->activeListPaginate();
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
            ->inRandomOrder()
            ->limit(4) 
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
        $contact = ContactUs::first();
        return view('frontend.contact',compact('contact'));
    }


    public function blogComment(Request $request,$id){
        try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'comment' => 'required',
            ]);
            $data = $request->all();
            $data['blog_id'] = $id;
            BlogComment::create($data);        
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
            return redirect()->back()->with('success', 'Blog Comment Save successfully');
        
    }



    public function support(Request $request){
         try {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'message' => 'required',
            ]);
             $data = $request->all();
            
            SupportQuery::create($data);        
        } catch (\Throwable $th) {
            return $this->redirectError($th->getMessage());
        }
            return redirect()->back()->with('success', 'Your query was submitted');
    }

}
