using Microsoft.AspNetCore.Mvc;
using Website_for_selling_car_tickets.Models;

public class AdminController : Controller
{
    // Trang chính của Admin (Trang chủ)
    public IActionResult Index()
    {
        return View();
    }

    // Trang đăng nhập
    public IActionResult Login()
    {
        return View();
    }

    // Trang danh sách nhân viên
    public IActionResult EmployeeList()
    {
        // Gửi danh sách nhân viên tới view (thực tế có thể cần lấy dữ liệu từ database)
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
    public IActionResult GetEmployeeList()
    {
        // Tạo danh sách giả lập (trong thực tế bạn nên lấy từ database hoặc service)
        var employees = new List<Employee>
    {
        new Employee("Nguyễn Văn A", "Quản lý", "a@example.com"),
        new Employee("Trần Thị B", "Nhân viên", "b@example.com")
    };

        // Trả về PartialView
        return PartialView("_EmployeeList", employees);
    }

}
