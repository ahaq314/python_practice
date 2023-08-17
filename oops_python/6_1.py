def main_welcome(func):
    def sub_welcome():
        print("Assalamwalekum")
        func()
        print("Allah Hafiz")

    sub_welcome()

@main_welcome   

def channel_name():
    print("iPhone")

channel_name()
#Here main_function is used as decorator
#channel_name is wrapped with main_welcome


