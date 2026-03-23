using Microsoft.AspNetCore.Mvc;
using Website_for_selling_car_tickets.Models;

namespace Website_for_selling_car_tickets.Controllers
{
    public class AccountController : Controller
    {
        private readonly ILogger<AccountController> _logger;

        public AccountController(ILogger<AccountController> logger)
        {
            _logger = logger;
        }

        // Trang đăng nhập
        public IActionResult Login()
        {
            return View();
        }

        // Trang đăng ký
        public IActionResult Register()
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
                return RedirectToAction("Index", "Home"); // Redirect tới trang chủ hoặc trang chính
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
                return RedirectToAction("Login"); // Sau khi đăng ký, chuyển hướng đến trang đăng nhập
            }
            else
            {
                // Thông báo lỗi nếu mật khẩu không khớp
                TempData["ErrorMessage"] = "Mật khẩu không khớp!";
                return View();
            }
        }

    }
}
