#include <iostream>
#include "Parent.h"

/**
 * メッセージを出力する
 */
void Parent::showMessage(const char* message){
	std::cout << "[message]" << message << std::endl;
}

