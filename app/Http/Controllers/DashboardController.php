use Intertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        return inertia::render('Dashboard/index');

    }
}