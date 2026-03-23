using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using Website_for_selling_car_tickets.Models;

namespace Website_for_selling_car_tickets.Controllers
{
    public class HomeController : Controller
    {
        private readonly ILogger<HomeController> _logger;

        public HomeController(ILogger<HomeController> logger)
        {
            _logger = logger;
        }

        public IActionResult Homepage()
        {
            // Kiểm tra xem có thông báo từ TempData hay không
            ViewData["Message"] = TempData["Message"];
            ViewData["ErrorMessage"] = TempData["ErrorMessage"];

            return View();
        }

        public IActionResult Privacy()
        {
            return View();
        }

        public IActionResult Contact()
        {
            return View();
        }

        // Trang Login
        public IActionResult Login()
        {
            return View();
        }

        // Trang Register
        public IActionResult Register()
        {
            return View();
        }
        public IActionResult introduce_Page()
        {
            return View();
        }
        public IActionResult news_page()
        {
            return View();
        }
        public IActionResult partner()
        {
            return View();
        }
        public IActionResult polyci_customer()
        {
            return View();
        }
        public IActionResult polyci_pay()
        {
            return View();
        }
        public IActionResult System_homecar()
        {
            return View();
        }
        // Xử lý Đăng nhập (phương thức POST)
        [HttpPost]
        public IActionResult Login(string username, string password)
        {
            // Kiểm tra đăng nhập (ví dụ đơn giản, bạn có thể thêm logic kiểm tra vào đây)
            if (username == "admin" && password == "1234")
            {
                // Đăng nhập thành công, chuyển hướng đến trang chủ hoặc một trang khác
                TempData["Message"] = "Đăng nhập thành công!";
                return RedirectToAction("Homepage");
            }
            else
            {
                // Thông báo lỗi nếu đăng nhập không thành công
                TempData["ErrorMessage"] = "Tên đăng nhập hoặc mật khẩu không đúng!";
                return View();
            }
        }

        // Xử lý Đăng ký (phương thức POST)
        [HttpPost]
        public IActionResult Register(string username, string password, string confirmPassword)
        {
            // Kiểm tra thông tin đăng ký (ví dụ đơn giản)
            if (password == confirmPassword)
            {
                // Logic lưu thông tin đăng ký vào cơ sở dữ liệu (hoặc bộ nhớ tạm thời)
                TempData["Message"] = "Đăng ký thành công!";
                return RedirectToAction("Login");
            }
            else
            {
                // Thông báo lỗi nếu mật khẩu không khớp
                TempData["ErrorMessage"] = "Mật khẩu không khớp!";
                return View();
            }
        }

        // Đăng xuất
        public IActionResult Logout()
        {
            // Logic đăng xuất (ví dụ xóa session hoặc cookie)
            TempData["Message"] = "Đã đăng xuất thành công!";
            return RedirectToAction("Homepage");
        }

        [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
        public IActionResult Error()
        {
            return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
        }
    }
}
