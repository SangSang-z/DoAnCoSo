namespace Website_for_selling_car_tickets.Models
{
    public class Employee
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Position { get; set; }
        public string Email { get; set; }

        // Constructor để khởi tạo các thuộc tính
        public Employee(string name, string position, string email)
        {
            Name = name;
            Position = position;
            Email = email;
        }
    }
}
